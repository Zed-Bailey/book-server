<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    public function download(Request $request) {
        $id = $request->route('id');
        $book = Book::find($id);

        return Storage::download('public/books/' . $book->file_name, $book->title);
    }


}
