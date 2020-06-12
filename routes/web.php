<?php

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
// Route::get('student', 'DashboardController@getStudent');

Route::get('room','DashboardController@getRoom');
Route::get('showroom','RoomController@showRoom');
Route::get('addRoom','RoomController@addRoom');

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::get('announcement',function(){return view('dashboard.createAnnouncement');});
});


Auth::routes();

Route::post('firebase','FirebaseController@register');
Route::get('addStudent','StudentController@randomStudent');
Route::get('showstudent','StudentController@showStudent');
Route::get('showcomplaint','ComplaintController@showcomplaint');
Route::get('showannounce','AnnouncementController@showAnnouncement');
Route::get('addprog','ProgramController@randomProg');
Route::post('announcement','AnnouncementController@createAnnouncement');

