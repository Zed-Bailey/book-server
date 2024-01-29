<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Library extends Component
{
    public $searchQuery = '';



    public function mount() {
    }


    public function filterModels() {
        if($this->searchQuery === '') {
            return Book::all();
        }

        return Book::where('title', 'like', $this->searchQuery . '%')->get();

    }
    public function render()
    {
        return view('livewire.library');
    }


}
