<?php

use Apiaccess\Verifyapitoken\VerifyApiToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/apiData', function (Request $request) {
    $a = new VerifyApiToken;
    return $a->apiData($request);
});
