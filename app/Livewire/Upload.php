<?php

namespace App\Livewire;

use App\Models\Book;
use Epubli\Epub\Epub;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;
    public $bookUpload;

    public function render()
    {
        return view('livewire.upload');
    }

    public function saveBook()
    {
        $this->validate([
            'bookUpload' => 'required'
        ]);

        $path = $this->bookUpload->store('public/books');
        error_log(Storage::disk()->path($path));

        $exploded_path = explode('/', $path);
        $file_name = explode('.',end($exploded_path))[0];

        $epub = new Epub(Storage::disk()->path($path));
        $img = $epub->getCover();

        $book = new Book();



        // book may not have a cover
        if($img != null) {
            $path = $file_name . '.jpg';
            Storage::put('public/images/' . $path, $img);
            $book->cover_path = $path;
        }

        $book->authors = join(',',  $epub->getAuthors());
        $book->title = $epub->getTitle();
        $book->file_name =
        $book->file_path = $path;
        $book->description = $epub->getDescription();

        $book->save();

    }
}
