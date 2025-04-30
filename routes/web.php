<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DesignController;

Route::get('/', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');

Route::get('/designs', [DesignController::class, 'index'])->name('designs.index');

Route::get('/AllDesigns', [DesignController::class, 'DisplayAll'])->name('designs.ShowAll');