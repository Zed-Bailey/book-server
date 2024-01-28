<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Library extends Component
{
    public $searchQuery = '';

    public function mount() {
    }

    public function render()
    {
        return view('livewire.library');
    }


}
