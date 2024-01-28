<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Epubli\Epub\Epub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{


    public function upload(Request $request) {

        $file = $request->file('newFile');
        $path = $file->store('books');
        $exploded_path = explode('/', $path);
        $file_id = end($exploded_path);

        $epub = new Epub($path);
        $img = $epub->getCover();
        $img_path = Storage::putFileAs('images', $img, $file_id);


        $book = new Book();
        $book->title = $epub->getTitle();
        $book->file_path = $path;
        $book->cover_path = $img_path;
        $book->description = $epub->getDescription();

        $book->save();

        return $file;
    }
}
