<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminUserEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-user-edit')->layout('admin');
    }
}
