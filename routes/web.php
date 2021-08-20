<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;


Route::get('/', [NavController::class, 'home']);
Route::get('characters', [NavController::class, 'characters']);
Route::get('authors', [NavController::class, 'authors']);
Route::post('deleteAuthor', [ActionController::class, 'deleteAuthor']);
Route::post('updateAuthor', [ActionController::class, 'updateAuthor']);
