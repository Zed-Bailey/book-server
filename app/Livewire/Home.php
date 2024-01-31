<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Home extends Component
{
    public $allBooks;

    public $searchQuery = '';

    public function mount() {
        $this->allBooks = Book::all();
    }
    public function render()
    {

        return view('livewire.home');
    }
}
