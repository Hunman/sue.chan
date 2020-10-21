<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // Fetch the list of boards
    // Try to load from cache if we can, so we can lower the number of database calls
    if (Cache::missing('boards')) {
        // If not in the cache, we put it in the cache
        Cache::put('boards', \App\Models\Board::all(), now()->addHours(8));
    }

    // We load the boards from the cache
    $boards = Cache::get('boards');

    // Then we return the index page, with boards fed to it
    return view('pages/index')
        ->with(compact('boards'));
});
