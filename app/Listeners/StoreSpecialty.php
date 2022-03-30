<?php

namespace App\Listeners;

use App\Events\SpecialistSpecialty;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class StoreSpecialty
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SpecialistSpecialty $event)
    {

        $current_timestamp = Carbon::now()->toDateTimeString();

        // searching for the id of the user
        // who just registered using his id
      $user =   DB::table('user_specialists')->where('email', $event->email)->first();
      $userid =  $user->id;

      //getting the array of specialty chosen by the user
      $specialty = $event->specialty;

      //getting specialty id and looping through it
      $specialist = DB::table('specialists')->get();

        foreach( $specialist as $specialt){
            if(in_array($specialt->id,   $specialty)){
                DB::table('specialist_roles')->insert([
                    'user_specialistid'=> $userid,
                    'specialistid' => $specialt->id,
                    'created_at'=>  $current_timestamp,
                    'updated_at'=>  $current_timestamp
                ]);
            }

       }
    }
}
