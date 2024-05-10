<?php

use Illuminate\Support\Facades\Route;
use \Inertia\Inertia;
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

Route::get(
    '/login', function(){
        return Inertia::render("Login");
    }
);

Route::get(
    '/sign-Up', function(){
    return Inertia::render("Sign-Up");
}
)->name("sign-Up");

Route::get(
    '/', function(){
    return Inertia::render("LandingPage");
}
);

Route::get(
    '/home', function(){
    return Inertia::render("HomePage");
}
)->name("home");

Route::get(
    '/Ranking', function(){
    return Inertia::render("RankingPage");
}
)->name("ranking");
Route::get(
    '/Universities', function(){
    return Inertia::render("UniversityPage");
}
)->name("universities");

Route::resource("comments",\App\Http\Controllers\CommentsController::class);
Route::resource("marks",\App\Http\Controllers\MarksController::class);
Route::resource("admin/universities",\App\Http\Controllers\UniversityController::class);
Route::resource("users",\App\Http\Controllers\userController::class);

Route::get('/modalComponent',function(){
    return Inertia::render("ModalComponent");
});

Route::get('/profilPage',function(){
    return Inertia::render("ProfilPage");
});
Route::get('/admin/home',function(){
    return Inertia::render("AdminPage");
});


