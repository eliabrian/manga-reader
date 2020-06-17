<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Shelf extends Component
{

    public $mangas;

    public function mount($mangas)
    {
        $this->mangas = $mangas;
    }

    public function render()
    {
        return view('livewire.shelf');
    }
}
