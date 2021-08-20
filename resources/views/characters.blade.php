@extends('layouts.base')

@section('title', 'Characters')
@section('css', 'home')

@section('content')
<section class="talkAboutCharacter">
    <p class="title">Liste des personnages</p>
    <form action="updateAuthor" method="POST">
    @csrf
        <div class="form_character">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div class="form_character">
            <label for="name">Année de création :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div class="form_character">
            <label for="name">Appartient à la BD :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div class="form_character">
            <label for="name">Dessiné par :</label>
            <input type="text" id="name" name="user_name">
        </div>
    <div class="form_character">
    <button type="submit" class="btn btn-secondary">Envoyer !</button>
    </div>
    </form>
    </div>
    <img src="https://medias.comixtrip.fr/wp-content/uploads/2019/04/fertPeaudemillebetes-13-1200x675.jpg" />
@endsection

