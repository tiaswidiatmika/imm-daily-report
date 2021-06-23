<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\PresenceController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
// =================================================================
Route::get('/', function () {
    // return view('layouts.app');
    return view('homepage');
});


Route::get('/create', [PostController::class, 'create'])
    ->name('create-report');


Route::get('/reports', [PostController::class, 'index'])
    ->name('all-reports');
Route::get('reports/arrival', [PostController::class, 'arrival'])
    ->name('arrival');
Route::get('reports/{id}', [PostController::class, 'show']);

Route::get('/create-template', [TemplateController::class, 'create'])
    ->name('create-template');
Route::post('/create-template', [TemplateController::class, 'store']);

Route::get('/create-from-template', [TemplateController::class, 'index'])
    ->name('create-from-template');
Route::get('/create-from-template/{id}', [TemplateController::class, 'createFromTemplate'] );
Route::post('/create-from-template', [PostController::class, 'storeFromTemplate']);

// Route::get('/template-list', [TemplateController::class, 'index'] )
//     ->name('template-list');
// Route::post('/create-from-template', [TemplateController::class, 'sandboxPost']);
Route::get('sections', function () {
    return view('sections.index');
})->name('sections-list');

Route::get('formations', function () {
    return view ('formations.index');
})->name('create-laporan-absensi');
Route::post('formations', [PresenceController::class, 'store']);

Route::get('absensi', function () {
    return view('post.absensi.laporan-absensi');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// =============================================================
// ==========ampas============================================

// Route::post('/create', [PostController::class, 'store']);


// Route::get('/reports/create', [PostController::class, 'create'])
//     ->name('create-post'); //create a new report per signed in user
// Route::post('/reports/create', [PostController::class, 'store']); //store newly created post

// Route::get('reports/attention-report', [AttentionReportController::class, 'getCurrentShift'])->name('attention-report');
// Route::get('reports/presence', [PresenceController::class, 'index']);


