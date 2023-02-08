<?php

use App\Http\Controllers\FontendController;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// yo xai Route::resource ko center maa rakhaney ko 
// Route::prefix('admin')->middleware('auth')->group(
    //     function () {
    // }
    // );
// yo xai Route::resource ko center maa rakhaney ko 

//  FontendController and route
Route::get('/', function () {
    return view('task');
}
);
Route::get('tasks', [App\Http\Controllers\FontendController::class, 'index']);

Route::prefix('/')->middleware('auth')->group(
    function () {
        Route::resource('task', '\App\Http\Controllers\TaskController')->middleware('auth');
        // Route::resource('gallery', '\App\Http\Controllers\GalleryController');   
    }
    );
 




// backend route and login
    Auth::routes();    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




