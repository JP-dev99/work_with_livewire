<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Names extends Component
{

    public function render()
    {
        return view('livewire.names', [
            'users' => User::simplepaginate(5)
        ]);
    }
}
