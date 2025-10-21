<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profil', function () {
    $nama = 'Mira';
    return view('profil', compact('nama'));
});

Route::get('array',function(){
    for ($i=0; $i <=5; $i++) {
        echo 'Hello Word' . $i . 'x<br>';
    }
});