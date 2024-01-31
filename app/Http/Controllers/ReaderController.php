<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    //

    public $id;
    public Book $book;

    public function readBook(Request $request) {
        $this->id = $request->route('id');
        $this->book = Book::find($this->id);

        return view('reader', [
            "id" => $this->id,
            "book" => $this->book
        ]);
    }
}
