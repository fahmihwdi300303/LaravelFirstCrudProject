<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

  
Route::get('/', [MahasiswaController::class,'index']);
 
Route::get('/', [MahasiswaController::class,'getMahasiswas']);
 
Route::post('/save', [MahasiswaController::class,'save']);
 
Route::patch('/update/{id}', ['as' => 'mahasiswa.update', 'uses' => 'App\Http\Controllers\MahasiswaController@update']);
 
Route::delete('/delete/{id}', ['as' => 'mahasiswa.delete', 'uses' => 'App\Http\Controllers\MahasiswaController@delete']);