<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KindleBookListController extends Controller
{
    //

//https://laravel.com/docs/10.x/filesystem#downloading-files
    public function get() {
        return view('book-list');
    }
}
