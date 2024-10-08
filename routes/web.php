<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\StagiairesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('stagiaires', 'App\Http\Controllers\StagiairesController');

    Route::get('stagiaire/{id}/certificate', [App\Http\Controllers\StagiairesController::class,'certificateRequest'])
        ->name('work.certificate');

});

