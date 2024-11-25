<?php

use Illuminate\Support\Facades\Route;

// Importing the controllers
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;

    Route::get('/', function () {
        return view('welcome');
    });
       // The controller that works for creating contacts
    Route::resource('contacts', ContactController::class);


    // The controller that works for the registration of users
    Route::get('/register', [RegisterUserController::class,'register'])->name('register');
    Route::post('/register', [RegisterUserController::class,'store'])->name('register.store');


       // The controller that works for the log in
    Route::get('/login', [LoginUserController::class,'login'])->name('login');
    Route::post('/login', [LoginUserController::class,'store'])->name('login.store');


       // The controller that works for the comments
    Route::get('/contacts/{contact}/comments', [ContactController::class, 'comments'])->name('contacts.comments');
    Route::post('/contacts/{contact}/comments', [ContactController::class, 'storeComment'])->name('contacts.comments.store');


       // The controller that works for the logout function
    Route::post('/logout', [LoginUserController::class,'logout'])->name('logout');
