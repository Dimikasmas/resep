<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sate_pisang', function () {
    return view('sate_pisang');
});
Route::get('/pudding_oreo', function () {
    return view('pudding_oreo');
});
Route::get('/sup_kale', function () {
    return view('sup_kale');
});
Route::get('/cerry_mocktail', function () {
    return view('cerry_mocktail');
});
Route::get('/garlic_toast', function () {
    return view('garlic_toast');
});
Route::get('/brownies_pudding', function () {
    return view('brownies_pudding');
});
Route::get('/clear_onion', function () {
    return view('clear_onion');
});