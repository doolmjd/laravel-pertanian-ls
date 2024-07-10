<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('datas', DataController::class);
Route::resource('datas.entries', EntryController::class);

Route::get('datas/{data}/project', [DataController::class, 'project'])->name('datas.project');
