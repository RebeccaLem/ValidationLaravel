<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function characters()
    {
        $characters = characters::all();
        return view('characters',['characters' => $characters]);
    }

    public function authors()
    {
        $authors = authors::all();
        return view('authors',['authors' => $authors]);
    }
}
