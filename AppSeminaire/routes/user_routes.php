<?php



    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('access:User');
    Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('access:Role');
    Route::resource('moderateurs', App\Http\Controllers\ModerateurController::class)->middleware('access:Moderateur');

