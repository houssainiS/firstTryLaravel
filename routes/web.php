<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\FirstController;
use App\Http\Controllers\computerscontroller;
Route::get('/',[FirstController::class,'index'])->name('index');
Route::get('/about',[FirstController::class,'about'])->name('about');
Route::get('/store',[FirstController::class,'store'])->name('store');
Route::get('/contact',[FirstController::class,'contact'])->name('contact');
Route::resource('computers',computerscontroller::class);



/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/kah', function () {
    $x = request('style');
    if(isset($x)){
        return 'this page is '.strip_tags($x).'';
    }
     return 'you r in kah';
});
Route::get('/store/{category?}/{item?}', function ($category = null,$item = null) {
   if(isset($category)){
    if(isset($item)){
        return '<h1> your r buying '.strip_tags($item).'</h1>';
    }
    return "<h1>you r in {$category} ! </h1>";
   }
    return '<h1>Store !</h1>';
});
*/
Route::get('/about/kah', function () {
    $x = request('style');
    if(isset($x)){
        return 'this page is '.strip_tags($x).'';
    }
     return 'you r in kah';
});