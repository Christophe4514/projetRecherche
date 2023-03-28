<?php



    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('access:User');
    Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('access:Role');
    Route::resource('moderateurs', App\Http\Controllers\ModerateurController::class)->middleware('access:Moderateur');
    Route::resource('seminaires', App\Http\Controllers\SeminaireController::class)->middleware('access:Seminaire');
    Route::resource('orateurs', App\Http\Controllers\OrateurController::class)->middleware('access:Orateur');
    Route::resource('themes', App\Http\Controllers\ThemeController::class)->middleware('access:Theme');

