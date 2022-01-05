<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{

    public $name = 'test';
    public $age = 22;
    public $show = false;
    public $select = 'PHP';

    public function render()
    {
        return view('livewire.data-binding');
    }
}
