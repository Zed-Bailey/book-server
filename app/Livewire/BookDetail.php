<?php

namespace App\Livewire;

use Livewire\Component;

class BookDetail extends Component
{

    public $id = '';

    public function mount() {
        $this->id = request()->route('id');
    }

    public function render()
    {
        return view('livewire.book-detail');
    }
}
