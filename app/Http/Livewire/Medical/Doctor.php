<?php

namespace App\Http\Livewire\Medical;

use Livewire\Component;

class Doctor extends Component
{
    public function render()
    {
        return view('livewire.medical.doctor')->layout('welcome');
    }
}
