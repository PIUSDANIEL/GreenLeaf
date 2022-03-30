<?php

namespace App\Http\Livewire\Medical;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MedicalProfile extends Component
{

    public $doctorsid;
    public $usermodal;
    public $specialists;

    public function SpecialistDetails($doctorsid){

         $this->usermodal = DB::table('user_specialists')->where('id', $doctorsid)->first();


    }

    public function mount($specialistids){




        $this->specialists = DB::table('specialist_roles')
                        ->join('user_specialists','specialist_roles.user_specialistid','=', 'user_specialists.id')
                        ->join('specialists','specialist_roles.specialistid','=', 'specialists.id')
                        ->join('categories','specialists.categoryid','=', 'categories.id')
                        ->where('specialist_roles.specialistid', '=', $specialistids )
                        ->where('specialist_roles.deleted', '=', 0 )
                        ->where('user_specialists.deleted', '=', 0 )
                        ->get();

                       // dd( $this->specialists);

                       if(count($this->specialists) < 1){
                            return redirect('/')->with('nodoctor','No medical personel availalable');
                       }

    }

    public function render()
    {
        return view('livewire.medical.medical-profile')->layout('welcome');
    }
}
