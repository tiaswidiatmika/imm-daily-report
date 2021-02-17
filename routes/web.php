<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AttentionReportController;
use App\Http\Controllers\PresenceController;

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

Route::get('/reports', function(){
    return Post::all()->sortByDesc('created_at');
});

Route::get('/reports/create', [PostController::class, 'create'])
    ->name('create-post'); //create a new report per signed in user
Route::post('/reports/create', [PostController::class, 'store']); //store newly created post

Route::get('reports/attention-report', [AttentionReportController::class, 'getCurrentShift'])->name('attention-report');
Route::get('reports/presence', [PresenceController::class, 'index']);

Route::get('formations', function () {
    return view ('formations.formations');
    // return User::where('alias', 'like', "%ti%")->first()->pluck('alias');
    // return User::where('alias', 'like', "%a%")->get();
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
