<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;



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


Route::get('/index', [WelcomeController::class,'index']);


Route::get('/', function () {
    echo 'welcome';
});
Route::get('/about', function () {
    echo 'Syaikhul Shafwan R/2141720105';
});

Route::get('/article/{id}',function($id){
    echo  'Ini Artikel Ke '.$id;
});
