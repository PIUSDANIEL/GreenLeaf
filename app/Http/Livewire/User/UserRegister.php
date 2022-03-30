<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserRegister extends Component
{
    public function render()
    {
        return view('livewire.user.user-register')->layout('welcome');
    }
}
