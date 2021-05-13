<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;

    protected $listeners = ['refresh'];

    public function refresh(){
        $this->render();
    }

    public function render()
    {
        $this->users = User::all();
        return view('livewire.users.users');
    }
}
