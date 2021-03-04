<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemplateController;

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
    return view('layouts.app');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/reports', function(){
    return Post::all()->sortByDesc('created_at');
})->name('all-reports');

Route::get('/create-template', [TemplateController::class, 'create'])->name('create-template');
Route::post('/create-template', [TemplateController::class, 'store']);


Route::get('/create-from-template', [TemplateController::class, 'sandbox'] )->name('create-from-template');
Route::post('/create-from-template', [TemplateController::class, 'sandboxPost']);


Route::get('/create', [PostController::class, 'create'])
    ->name('create-report');

Route::post('/create', [PostController::class, 'store']);


// Route::get('/reports/create', [PostController::class, 'create'])
//     ->name('create-post'); //create a new report per signed in user
// Route::post('/reports/create', [PostController::class, 'store']); //store newly created post

// Route::get('reports/attention-report', [AttentionReportController::class, 'getCurrentShift'])->name('attention-report');
// Route::get('reports/presence', [PresenceController::class, 'index']);

Route::get('formations', function () {
    return view ('formations.formations');
    // return User::where('alias', 'like', "%ti%")->first()->pluck('alias');
    // return User::where('alias', 'like', "%a%")->get();
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
