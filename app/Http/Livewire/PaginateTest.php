<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use app\Models\User;

class PaginateTest extends Component
{
    use WithPagination;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.paginate-test');
    }
}
