<?php

namespace App\Livewire;

use App\Models\Book;
use Epubli\Epub\Epub;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBook extends Component
{
    use WithFileUploads;

    #[Validate('image')]
    public $newCoverPhoto;

    #[Validate('required')]
    public $newTitle;


    public $newDescription;

    public Book $book;

    public function mount($id) {
        $b = Book::find($id);
        $this->book = $b;
        $this->newTitle = $this->book->title;
        $this->newDescription = $this->book->description;
    }

    public function saveCover() {
        if($this->newCoverPhoto != null) {
            $fileName = explode('.', $this->book->file_name)[0] . '.jpg';
            Storage::disk()->delete('storage/public/images/' . $this->book->cover_path);

            $path = $this->newCoverPhoto->storeAs(path:'public/images', name: $fileName);
            error_log($path);
            return $fileName;

        }

        return $this->book->cover_path;
    }

    public function saveChanges() {
//        $this->validate();

        $epub = new Epub(Storage::disk()->path($this->book->file_path));

        $epub->setTitle(trim($this->newTitle));


        $coverPath = $this->saveCover();
        error_log($coverPath);
        $epub->setCover(Storage::path('public/images/'.$coverPath), 'image/jpeg');

        try {
            $epub->save();

            $this->book->title = $this->newTitle;
            $this->book->cover_path = $coverPath;
            $this->book->description = $this->newDescription;

            $this->book->save();

            $this->redirect("/library/{$this->book->id}", navigate: true);
        } catch(Exception) {
            $this->addError('saveError', 'failed to save changes to book');
        }

    }
    public function render()
    {
        return view('livewire.edit-book');
    }
}
