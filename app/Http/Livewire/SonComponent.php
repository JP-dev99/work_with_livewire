<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use app\Models\User;

class SonComponent extends Component
{
    
    use WithPagination;
    
    public $users = '';

    //protected $listeners = ['updateSon' => '$refresh'];
    protected $listeners = ['geral' => 'updateFather'];


    public function mount($user)
    {
        $this->user = $user;
    }

    public function updateFather()
    {
        $this->emitUp('geral');
    }

    public function render()
    {
        return view('livewire.son-component');
    }
}
