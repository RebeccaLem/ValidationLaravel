@extends('layouts.base')

@section('title', 'Accueil')
@section('css', 'home')
@section('css', 'authors')

@section('content')
<div class="card">
    <tr>
        <td><a href="authorUpdate/{{ $author->author_id }}">{{ $author->name }}</a></td>
        <td>{{ $character->author->name }}</td>
        <td>
            @foreach ($authors->characters as $character)
                <p>{{ $author->name }}</p>
            @endforeach
        </td>
        <td>{{ $character->publication_year }}</td>
    <td>
        <form action="updateAuthor" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $author->author_id }}">
            <input class="btn btn-info" type="submit" value="MAJ">
        </form>
    </td>
    <td>
        <form action="deleteAuthor" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $author->author_id }}">
            <input class="btn btn-info" type="submit" value="SUP">
        </form>
    </td>
@endsection
