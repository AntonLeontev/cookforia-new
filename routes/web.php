<?php

use App\Http\Controllers\ScheduleWidgetController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/events', 'events')->name('events');
Route::view('/certificate', 'certificate')->name('certificate');
Route::view('/recipes', 'recipes')->name('recipes');
Route::view('/recipe', 'recipe')->name('recipe');
Route::view('/blog', 'blog')->name('blog');
Route::view('/article', 'article')->name('article');
Route::view('/menu', 'menu')->name('menu');
Route::view('/stocks', 'stocks')->name('stocks');

Route::controller(ScheduleWidgetController::class)
    ->group(function () {
        Route::get('/schedule', 'getDaySchedule')->name('schedule.get');
        Route::post('/schedule/book', 'scheduleSlot')->name('schedule.schedule');
    });
