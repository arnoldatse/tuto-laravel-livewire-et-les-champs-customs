<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $services;

    protected $listeners = ['refresh'];

    public function refresh(){
        $this->render();
    }

    public function render()
    {
        $this->services = Service::all();

        return view('livewire.services.services');
    }
}
