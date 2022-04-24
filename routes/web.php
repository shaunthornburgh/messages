<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Auth::routes();

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{all}', function () {
    return view('app');
})->where('all', '^(?!api\/)[\/\w\.-]*');
