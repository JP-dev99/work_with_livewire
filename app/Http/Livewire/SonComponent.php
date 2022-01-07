<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SonComponent extends Component
{
    public $users = '';

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.son-component');
    }
}
