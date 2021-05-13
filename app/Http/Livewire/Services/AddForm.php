<?php

namespace App\Http\Livewire\Services;


use App\Models\Service;
use App\Models\User;
use Livewire\Component;

class AddForm extends Component
{
    public $service = [
        'name'=>null,
        'user_id'=>null
    ], $labelUser, $showRecommendations, $listRecommendations;

    protected $listeners = ['hideRecommendations'];

    public function getRecommendations(){
        $users = User::search($this->labelUser);
        $this->listRecommendations = $users;
        $this->showRecommendations = true;
    }

    public function selectUser($user_id){
        $user = User::find($user_id);
        $this->service['user_id'] = $user->id;
        $this->labelUser = $user->name;

        $this->showRecommendations = false;
    }

    public function hideRecommendations(){
        $this->showRecommendations = false;
    }

    public function submit(){
        $service = new Service();

        $service->name = $this->service['name'];
        $service->user_id = $this->service['user_id'];
        $service->save();

        $this->reset();

        $this->emitUp('refresh');
    }

    public function render()
    {
        return view('livewire.services.add-form');
    }
}
