<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class KindleController extends Controller
{
    //

    public function index()
    {
        $books = Book::all();
        return view('kindle', [
            'books' => $books
        ]);
    }

    public function detail(Request $request) {
        $id = $request->route('id');
        $book = Book::find($id);
        return view('kindle-detail',[
            'book' => $book
        ]);
    }
}
