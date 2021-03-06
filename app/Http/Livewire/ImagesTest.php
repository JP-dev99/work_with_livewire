<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;

class ImagesTest extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.images-test');
    }
}
