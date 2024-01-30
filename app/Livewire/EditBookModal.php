<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditBookModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.edit-book-form');
    }
}
