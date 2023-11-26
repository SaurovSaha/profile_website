<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('page.about-me');
});

Route::get('project-list', function () {
    return view('page.project_list');
});

Route::get('contact-me', function () {
    return view('page.contact_me');
});

Route::post('/contact-me', [ContactController::class, 'store']);



