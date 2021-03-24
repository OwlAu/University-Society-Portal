<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\AnnouncementController;

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

/* Landing Page */
Route::get('/', function () {
    return view('welcome');
});

/* Profile Page */
Route::get('/profile', function () {
    return view('profile');
});

/* Forum Page */
Route::get('/forum', function () {
    return view('profile');
});

/* Society Page */
Route::get('/society', function () {
    return view('society');
});

/* Event Page */
Route::get('/event', function () {
    return view('event');
});

/* Moderator's Setting Page */
/* Route::get('/setting',function(){
    return view('setting');
}); */
Route::get("/setting",[SocietyController::class,'display']);


/* Moderator's Setting/createSocietyProfile Page */
Route::get('/setting/create_society_profile',function(){
    return view('createSocietyProfile');
});
Route::post('/setting/create_society_profile',[SocietyController::class,'store'])->name('/setting/create_society_profile');

/* Moderator's Setting/updateSocietyProfile Page */
Route::get("setting/updateSociety/{id}",[SocietyController::class,'updateView']);
Route::put('setting/updateSociety/{id}',[SocietyController::class,'update']);

/* Moderator's Create new Announcement */
Route::get('/create_new_announcement',function(){
    return view('createNewAnnouncement');
});
Route::post('/create_new_announcement',[AnnouncementController::class,'store'])->name('/create_new_announcement');

/* Moderator's Announcement List */
Route::get("/announcement_list",[AnnouncementController::class,'display']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');