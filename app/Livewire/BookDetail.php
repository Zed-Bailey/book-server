<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class BookDetail extends Component
{

    public $id = '';
    public Book $book;
    public function mount($id) {
        $this->id = $id;
        $this->book = Book::find($id);
    }


    /**
     * deletes the book and cover image from the disk
     *
     */
    public function deleteClicked() {

        Storage::disk()->delete(['images/' . $this->book->cover_path, 'books/' . $this->book->file_name]);
        $this->book->delete();
        return $this->redirect('/library');
    }


    public function render()
    {
        return view('livewire.book-detail');
    }
}
