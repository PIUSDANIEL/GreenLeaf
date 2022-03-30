<?php

namespace App\Http\Livewire\Specialist;

use App\Models\Category;
use App\Models\Specialist;
use App\Models\Specialist_role;
use App\Models\user_specialist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SpecialistDashboard extends Component
{

   
  
    public $specialty;
    public $specialty_role;
    public $specialty_role_id;



     public $ids ;



     
    











    public function render()
    {

        $this->ids = auth()->user()->id;

        $this->specialty = Specialist::all();


        $this->specialty_role = Specialist_role::where('user_specialistid', $this->ids)
                                                    ->where('deleted',0)
                                                    ->get();

            foreach( $this->specialty_role as $speciid ){
                $this->specialty_role_id[] = $speciid->specialistid;
            }



        if(empty(Auth::guard('specialist')->user()->homeaddress) ||
        empty(Auth::guard('specialist')->user()->officeaddress))
        {
            $ttt = 1;
        }else{
            $ttt = " ";
        }
        return view('livewire.specialist.specialist-dashboard',['ttt'=>$ttt])->layout('specialist');
    }


}
