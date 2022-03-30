<?php

namespace App\Http\Livewire\User;

use App\Models\Specialist;
use Livewire\Component;

class UserDashboard extends Component
{
    public function render()
    {
        $specialty = Specialist::get();
        return view('livewire.user.user-dashboard',['specialty'=> $specialty])->layout('user');
    }
}
