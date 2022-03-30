<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user_admin;
class AdminController extends Controller
{


    public function login (Request $req){

        $req->validate([
            'email' => 'required|email|exists:user_admins,email',
            'password'=>'required',
            'remember'=> 'string'
        ]);

        //$user = $req->only('email','password');

        if(Auth::guard('admin')->attempt(['email'=>$req->email, 'password'=>$req->password, 'deleted'=> 0], $req->remember)){
            return redirect('admin/dashboard')->with('success','Login successful');
           }else{
           return redirect()->back()->with('error','Login failed');
        }
    }



    public function edit_profile(Request $request){
        $request->validate([
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'email'=>'required|email',
            'phonenumber'=>'required|digits:11 ',
            'image'=>'image|file',


        ],[
            'firstname.required' => 'First Name is required',

        ]);

        $id = $request->hidden;







        //dd($id);
        $getuserm = user_admin::find($id);

        $getuserm->firstname = $request->firstname;
        $getuserm->lastname = $request->lastname;
        $getuserm->email = $request->email;
        $getuserm-> phonenumber = $request->phonenumber;


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



          $getuserm->save();

          if($getuserm){
            return redirect('admin/dashboard')->with("edited",'Your profile has been updated');
          }else{
            return redirect('admin/dashboard')->with("edited_failed",'Please check your input');
          }




    }



    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
