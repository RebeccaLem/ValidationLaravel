@extends('layouts.base')

@section('title', 'Characters')
@section('css', 'home')

@section('content')
<section class="talkAboutCharacter">
    <p class="title">Liste des personnages</p>
<form action="updateAuthor" method="POST">
    @csrf
    <div class="form-group">
        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
        @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-secondary">Envoyer !</button>
</form>
</div>
@endsection

