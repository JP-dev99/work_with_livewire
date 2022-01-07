<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FatherComponent extends Component
{
    public $users = ['Larissa', 'Botelho', 'moraes'];
    
    protected $listeners = ['geral' => '$refresh'];

    public function mount()
    {
        $this->users = User::all();
    }

    public function removeUser($user_id)
    {
        User::whereId($user_id)->first()->delete();
        //$this->users = User::all();
        $this->users = $this->users->filter(function($user) use ($user_id) {
            return $user->id != $user_id;
        });
    }

    public function updateSon()
    {
        $this->emit('updateSon');
    }

    public function render()
    {
        return view('livewire.father-component');
    }
}
