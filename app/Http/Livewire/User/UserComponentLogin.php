<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserComponentLogin extends Component
{
    public function render()
    {
        return view('livewire.user.user-component-login')->layout('welcome');
    }
}
