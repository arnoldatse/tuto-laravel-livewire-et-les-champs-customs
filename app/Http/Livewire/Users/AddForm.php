<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class AddForm extends Component
{
    protected $listeners = ['dateUpdated'];

    public $user = [
        'name'=>null,
        'birthdate'=>null
    ];

    public function dateUpdated($date){
        $this->user['birthdate'] = $date;
    }

    public function submit(){
        $user = new User();

        $user->name = $this->user['name'];
        $user->birthdate = Carbon::createFromFormat('d/m/Y H:i', $this->user['birthdate']) ;

        $user->save();

        $this->reset();

        $this->emitUp('refresh');
    }

    public function render()
    {
        return view('livewire.users.add-form');
    }
}
