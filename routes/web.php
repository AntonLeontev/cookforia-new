<?php

use App\Http\Controllers\ScheduleWidgetController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/events', 'events')->name('events');
Route::view('/certificate', 'certificate')->name('certificate');

Route::controller(ScheduleWidgetController::class)
    ->group(function () {
        Route::get('/schedule', 'getDaySchedule')->name('schedule.get');
        Route::post('/schedule/book', 'scheduleSlot')->name('schedule.schedule');
    });
