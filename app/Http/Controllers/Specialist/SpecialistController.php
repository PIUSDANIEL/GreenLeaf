<?php

namespace App\Http\Controllers\Specialist;

use App\Events\SpecialistSpecialty;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\Specialist_role;
use App\Models\user_specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SpecialistController extends Controller
{

    public function register (Request $req){

        $req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:user_specialists,email',
            'phonenumber'=>'required',
            'specialty'=>'required',
            'password' =>'required',
            'password_confirmation'=>'required|same:password'
        ],[
            'firstname.required' => 'First Name is required',
            'password_confirmation.required' => 'Please confirm your password',
            'password_confirmation.same' => 'Both password must match',
            'email.unique' => 'User already exist...Please login'

        ]);



        $save = new user_specialist();
        $save->firstname = $req->firstname;
        $save->lastname = $req->lastname;
        $save->email = $req->email;
        $save->phonenumber = $req->phonenumber;
        $save->password = Hash::make($req->password);
        $save->save();


        //getting the needed data for the event and placing the event before the
        // redirect beneath or else it wont work
        $email =  $req->email;
        $specialty = $req->specialty;

        event(new SpecialistSpecialty($email,$specialty));




        $user = $req->only('email','password');

        if(Auth::guard('specialist')->attempt($user)){
            return redirect('specialist/dashboard')->with('success','Login successful');
         }else{
           return redirect()->back()->with('error','Login failed');

        }



    }



    public function login (Request $req){

        $req->validate([
            'email' => 'required|email|exists:user_specialists,email',
            'password'=>'required',
            'remember'=>'string'
        ]);

       // $user = $req->only('email','password');

        if(Auth::guard('specialist')->attempt(['email' => $req->email, 'password' => $req->password, 'deleted'=> 0], $req->remember )){
            return redirect('specialist/dashboard')->with('success','Login successful');
           }else{
           return redirect()->back()->with('error','Email and Password does not match');
        }
    }


    public function logout(){
        Auth::guard('specialist')->logout();
        return redirect('/');
    }


    public function office (Request $request){

        $request->validate([

            'officeaddress' =>'required|string',
            'homeaddress' =>'required|string'
        ]);

        $data = user_specialist::where('id',$request->hiddenid)
        ->update(
            ['officeaddress'=> $request->officeaddress,'homeaddress'=> $request->homeaddress]);

            if($data){
                 return   redirect("specialist/dashboard")->with('office', 'Office and Home address saved!');
            }else{
                return   redirect("specialist/dashboard")->with('fail', 'failed');
            }

    }




    public function edit_profile(Request $request){



       $validate = validator::make($request->all(), [
        'firstname'=>'required|string',
        'lastname'=>'required|string',
        'email'=>'required|email',
        'phonenumber'=>'required|digits:11',
        'image'=>'image|file',
        'specialty'=>'required',
        'officeaddress'=>'required|string',
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

            $getuserm = user_specialist::find($id);

            $getuserm->firstname = $request->firstname;
            $getuserm->lastname = $request->lastname;
            $getuserm->email = $request->email;
            $getuserm-> phonenumber = $request->phonenumber;
            $getuserm->officeaddress = $request->officeaddress;
            $getuserm->homeaddress = $request->homeaddress;

            //image upload
            if($request->hasFile('image')){
                if($request->file('image')->isValid()){
                    $fileDestination = 'public/images';
                    $image =  $request->image;
                    $image_name =  $image->getClientOriginalName();
                    $path =  $request->image->storeAs( $fileDestination, $image_name);

                    $getuserm->image =  $image_name;

                }
            }


            $spe = Specialist_role::where('user_specialistid',$id)->where('deleted','0')->update(['deleted'=> 1]);

            foreach( $request->specialty as $special){
              //dd($special);

                if(DB::table('specialist_roles')->where('user_specialistid', $id)->where('specialistid',$special)->exists()){

                    DB::table('specialist_roles')->where('user_specialistid', $id)->where('specialistid',$special)->update(['deleted'=> 0]);

                }else{
                    DB::table('specialist_roles')->insert([
                        'user_specialistid' => $id,
                        'specialistid' => $special,
                    ]);
                }

            }


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

            return redirect('specialist/dashboard')->with('imagefailed', 'Image uploaded failed');
        }else{



            $imagestore = user_specialist::find($id);

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

        return redirect('specialist/dashboard')->with('imagesuccess', 'Image uploaded succesfully');

        }


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

        $pass = user_specialist::where('id',$requ->id)->value('password');

            if(hash::check($requ->oldpassword,$pass)){

                $hashpassword = hash::make($requ->password);

                user_specialist::where('id',$requ->id)->update(['password'=> $hashpassword]);

                Auth::guard('specialist')->logout();

                return redirect('specialist/login')->with('password_success','Change of password successful please login again');

            }else{
                return redirect('specialist/login')->with('password_error','Incorrect previous password !');

            }

     }


     public function specialistprofile($id){


        $special = DB::table('user_specialists')
                            ->join('specialist_roles','user_specialists.id','=','specialist_roles.user_specialistid')
                            ->join('specialists','specialist_roles.specialistid','=','specialists.id')
                           // ->select('user_specialists.firstname','user_specialists.lastname','specialists.specialization')
                            ->where('user_specialists.id','=', $id)
                            ->distinct()
                            ->get();

                            return response()->json($special);


     }



     public function getedit_profile($id){

        $specialedit =  DB::table('user_specialists')
                    ->join('specialist_roles','user_specialists.id','=','specialist_roles.user_specialistid')
                    ->join('specialists','specialist_roles.specialistid','=','specialists.id')
                // ->select('user_specialists.firstname','user_specialists.lastname','specialists.specialization')
                    ->where('user_specialists.id','=', $id)
                    ->distinct()
                    ->get();

                 return response()->json([
                     'specialedit' => $specialedit,
                 ]);
     }



}
