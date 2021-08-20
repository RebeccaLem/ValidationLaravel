<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function deleteAuthor(Request $request) {
        $Character = Character::findOrFail($request->id);
        $Character->delete();
        return redirect('Characters');
    }

    public function updateAuthor() {
        $authors = Author::findOrFail($request->author_id);
        $authors = Author::all()->sortBy('name');
        $Characters = Character::all()->sortBy('name');
        return view('updateBook', ['author' => $authors, 'Character' => $Characters]);
    }


}
