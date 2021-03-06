<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contacts/all', [
    ContactsController::class,'getAllData'
])->name('contacts-data');

Route::get('/contacts/all/{id}',[
    ContactsController::class,'getOneData'
])->name('contact-data-detail');

Route::get('/contacts/all/{id}/update',[
    ContactsController::class,'updateData'
])->name('contact-data-update');

Route::post('/contacts/all/{id}/update',[
    ContactsController::class,'updateDataSubmit'
])->name('contact-update-submit');

Route::get('/contacts/all/{id}/delete',[
    ContactsController::class,'deleteData'
])->name('contact-data-delete');

Route::post('/contacts/submit', [
    ContactsController::class,'submit']
)->name('contacts-form');
