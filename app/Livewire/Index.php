<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Index extends Component
{
    public $allBooks;

    public function mount() {
        $this->allBooks = Book::all();
    }
    public function render()
    {

        return view('livewire.index');
    }
}
