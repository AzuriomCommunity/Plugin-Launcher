<?php

use Azuriom\Plugin\Launcher\Controllers\Admin\LauncherAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your plugin. These
| routes are loaded by the RouteServiceProvider of your plugin within
| a group which contains the "web" middleware group and your plugin name
| as prefix. Now create something great!
|
*/

Route::get('/', [LauncherAdminController::class, 'show'])->name('settings');
Route::post('/', [LauncherAdminController::class, 'save'])->name('settings.save');
