<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\Specialist_role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Exists;

class MedicalController extends Controller
{
   // public function getspecialist($id){

     //  $specialists = DB::table('specialist_roles')
                   //     ->join('user_specialists','specialist_roles.user_specialistid','=', 'user_specialists.id')
                    //    ->join('specialists','specialist_roles.specialistid','=', 'specialists.id')
                    //    ->join('categories','specialists.categoryid','=', 'categories.id')
                    //    ->where('specialist_roles.specialistid', '=', $id )
                     //   ->where('specialist_roles.deleted', '=', 0 )
                     //   ->where('user_specialists.deleted', '=', 0 )
                    //    ->get();



           // return  $specialists;

          // if($specialists){
           // return redirect()->route('medical', ['specialists'=>$specialists]);
           //}

   // }

    public function review (Request $request){
            $val_review = validator::make($request->all(),[
                'rating'=> 'required|integer',
                'review'=> 'string',
                'userid'=>'required|integer',
                'user_speciaistid'=>'required|integer'
            ]);



            if($val_review->fails()){
                return response()->json([
                    'status'=> 400,
                    'error_message'=> $val_review->errors()
                ]);
            }else{

                if(DB::table('rating')->where('user_specialistid',$request->user_speciaistid)->where('userid',$request->userid)->exists()){
                                    DB::table('rating')
                                    ->where('user_specialistid',$request->user_speciaistid)
                                    ->where('userid',$request->userid)
                                    ->update(['rating' => $request->rating, 'review'=>$request->review]);
                }else{

                    DB::table('rating')->insert([
                        'user_specialistid'=> $request->user_speciaistid,
                        'userid'=> $request->userid,
                        'rating'=> $request->rating,
                        'review'=>$request->review
                    ]);
                }


                return  response()->json([
                    'status'=> 200,
                ]);

            }
    }



}
