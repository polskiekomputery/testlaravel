<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\PostsController;

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
    return view('welcome');
});

//Laravel 7.4
//Route::get('/computers', [ComputersController::class, 'index']);

//
Route::get('/computers', 
           [ComputersController::class, 'index'])->name('Computers');

//Parameter can be only integer
//Route::get('/computers/{id}', 
//           [ComputersController::class, 'show'])->where('id', '[0-9]+');

//Parameter can be only string
//Route::get('/computers/{name}', 
//           [ComputersController::class, 'show'])->where('name', '[a-zA-Z]+');

//Parameter with name and id
//Route::get('/computers/{name}/{id}', 
//           [ComputersController::class, 'show'])->where([
//              'name' => '[a-z]+',
//              'id' => '[0-9]'
//           ]);

//Route::get('/computers/{name}', [ComputersController::class, 'show']);

Route::get('/computers/about', 
           [ComputersController::class, 'about'])->name('About');

//Laravel 8.0
//Route::get('/computers', 'App\Http\Controllers\CoputersController@index');

//Before Laravel 8
//Route::get('/computers', 'ComputersController@index');

Route::get('/login', function () {
    return 'Strona logowania';
});

Route::get('/posts', [PostsController::class, 'index'])->name('Posts');;
Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);


//Route::get('/jsonarray', function () {
//    return response()->json([
//    'project' => 'Database of Polish Computers',
//   'target' => 'Laravel json array view test.'
//    ]);
// });



