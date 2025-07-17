<?php

use App\Models\kategori;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $kategori = kategori::all();
    return view('index', ['kategori' => $kategori]);
});
