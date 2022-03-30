<?php

namespace App\Http\Livewire\Home;

use App\Models\Specialist;
use Livewire\Component;

class Homecomponent extends Component
{
    public function render()
    {
       $specialty = Specialist::get();
        return view('livewire.home.homecomponent',['specialty'=>$specialty])->layout('welcome');
    }
}
