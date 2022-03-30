<?php

namespace App\Http\Livewire\Specialist;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SpecialistProfile extends Component
{
    public function render()
    {
            $category = DB::table('categories')->get();

            $specialty = DB::table('specialists')->get();

        return view('livewire.specialist.specialist-profile',['category'=> $category],['specialty'=>$specialty])->layout('welcome');
    }
}
