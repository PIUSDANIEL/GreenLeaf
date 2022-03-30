<?php

namespace App\Http\Livewire\Specialist;

use App\Models\Specialist;
use Livewire\Component;

class SpecialistRegister extends Component
{

    public $specialists;
    public function render()
    {

        $this->specialists = Specialist::all();
        return view('livewire.specialist.specialist-register')->layout('welcome');
    }
}
