<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserRegisterController extends Controller
{
    public function register (Request $req){

        $req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users,email',
            'phonenumber'=>'required',
            'password' =>'required',
            'password_confirmation'=>'required|same:password'
        ],[
            'firstname.required' => 'First Name is required',
            'password_confirmation.required' => 'Please confirm your password',
            'password_confirmation.same' => 'Both password must match',
            'email.unique' => 'User already exist...Please login'

        ]);

        $save = new User();
        $save->firstname = $req->firstname;
        $save->lastname = $req->lastname;
        $save->email = $req->email;
        $save->phonenumber = $req->phonenumber;
        $save->password = Hash::make($req->password);
        $save->save();

        $user = $req->only('email','password');

        if(Auth::guard('web')->attempt($user)){
            return redirect('user/dashboard')->with('success','Login successful');
         }else{
           return redirect()->back()->with('error','Login failed');
        }

    }





    public function edit_profile(Request $request){



        $validate = validator::make($request->all(), [
         'firstname'=>'required|string',
         'lastname'=>'required|string',
         'email'=>'required|email',
         'phonenumber'=>'required|digits:11',
         'homeaddress'=>'required|string',


      ],[
         'firstname.required' => 'First Name is required',

      ]);

      $id = $request->hidden;


         if($validate->fails()){
             return response()->json([
                 'status' => 400,
                 'hidden' => $id,
                 'errors' => $validate->errors()
             ]);


         }else{

             $getuserm = User::find($id);

             $getuserm->firstname = $request->firstname;
             $getuserm->lastname = $request->lastname;
             $getuserm->email = $request->email;
             $getuserm-> phonenumber = $request->phonenumber;
             $getuserm->homeaddress = $request->homeaddress;


               $getuserm->save();



               return response()->json([
                   'status'=> 200,
                   'message'=> 'Your profile has been updated',
               ]);



         }



    }


    public function edit_profile_image(Request $imgrequest){
        $valimage = validator::make($imgrequest->all(),[
            'id' => 'integer',
            'image'=>'image|file',
        ]);

       // dd($imgrequest->image);

       $id = $imgrequest->id;

        if($valimage->fails()){

            return redirect('user/dashboard')->with('imagefailed', 'Image uploaded failed');
        }else{



            $imagestore = User::find($id);

              //image upload
         if($imgrequest->hasFile('image')){
            if($imgrequest->file('image')->isValid()){
                $fileDestination = 'public/images';
                $image =  $imgrequest->image;
                $image_name =  $image->getClientOriginalName();
                $path =  $imgrequest->image->storeAs( $fileDestination, $image_name);

                $imagestore->image =  $image_name;

            }

            $imagestore->save();
        }

        return redirect('user/dashboard')->with('imagesuccess', 'Image uploaded succesfully');

        }


    }


    public function getedit_profile($id){

        $useredit =  User::where('id',$id)->where('deleted',0)->get();



                 return response()->json([
                     'useredit' => $useredit,
                 ]);
     }










    public function password_change(Request $requ){
        $requ->validate([
            'id'=>'required',
            'oldpassword'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',



        ],[
            'oldpassword.required' => 'Old password is required',

        ]);

        $pass = user::where('id',$requ->id)->value('password');

            if(hash::check($requ->oldpassword,$pass)){

                $hashpassword = hash::make($requ->password);

                user::where('id',$requ->id)->update(['password'=> $hashpassword]);

                Auth::guard('web')->logout();

                return redirect('user/login')->with('password_success','Change of password successful please login again');

            }else{
                return redirect('user/dashboard')->with('password_error','Incorrect previous password !');
            }
    }

}
