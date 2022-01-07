<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\User;


class LifeCycleHooks extends Component
{
    public $name = '';
    public $lastName = '';
    public $hydrate = '';
    public $updated = '';
    public $updating = '';
    public $newUpdatedName = '';

    //public $requestParam = '';
    //public $users = User::all();

    public function mount(request $request) //É EXECUTADO TODA VEZ QUE O COMPONENTE É MONTADO, SÓ CONSEGUIMOS EDITAR A REQUEST ATRAVÉS DO MOUNT, DEPOIS TODAS AS REQUISIÇÕES SÃO FEIAS VIA AJAX
    {
        $this->name = 'João';
        $this->lastName = 'Sena';
        // $this->requestParam = $request->input('name');
        // $this->users = User::all();
    }

    public function hydrate() //EXECUTADO CADA VEZ QUE UM ELEMENTO DO COMPONENTE É ATUALIZADO
    {
        $this->hydrate = now(); //now pega a hora exata que o evento é disparado
    }

    public function updated() //TODA VEZ QUE O MODEL É EXECUTADO, QUANDO É ALTERADO DE ACORDO COM O WIRE:MODEL
    {
        $this->updated = now();
    }

    public function updating() // EXECUTADO ANTES DO UPDATING
    {
        $this->updating = now();
        // sleep(3);
    }

    public function updatedName()
    {
        $this->newUpdatedName = 'o nome foi atualizado';
    }

    public function randomName()
    {
        $names = ["Thiago", "Felipe", "Matheus"];
        $this->name = $names[rand(0,2)];
    }

    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
