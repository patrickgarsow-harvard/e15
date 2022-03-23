<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $test = Str::plural('mouse');
        # TODO: Query the database for all the books;
        return dd(storage_path('temp'));
    }
}