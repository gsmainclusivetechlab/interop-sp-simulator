<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::put('callback', function (Request $request) {
    return new \GuzzleHttp\Psr7\Response(204);
});

Route::post('{testCase?}', 'TransactionController@generate');

Route::post('/accounts/{identifierType}/{identifier}/authorisationcodes', 'AccountsController@store');
