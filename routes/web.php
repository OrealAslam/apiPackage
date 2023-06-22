<?php

use Illuminate\Support\Facades\Route;
use Apiaccess\Verifyapitoken\VerifyApiToken;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::post('/', function (Request $request) {
    $a = new VerifyApiToken;
    $a->apiData($request);
});
