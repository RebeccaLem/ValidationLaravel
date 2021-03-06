<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function characters()
    {
        $characters = Character::all();
        return view('characters',['characters' => $characters]);
    }

    public function authors()
    {
        $authors = authors::all();
        return view('authors',['authors' => $authors]);
    }
}
