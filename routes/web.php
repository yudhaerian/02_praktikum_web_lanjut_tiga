<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProgramController;
use App\Http\Controllers\ContactUsController;

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

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) ->name('home');

// // Praktikum 1 route ke 127.0.0.1/
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Praktikum 1 route ke 127.0.0.1/about
// Route::get('/about',function (){
//     echo " NIM : 20417230 </br> 
//     Nama : Moch Yudha Erian Saputra";
// });

// Praktikum 1 route ke 127.0.0.1/articles/{id}
// Route::get('/articles/{id}',function($id){
//     echo "Halaman Artikel ".$id;
// });


// //praktikum 2 no 1
// Route::get('/', [App\Http\Controllers\PageController::class,'index']);
// Route::get('/about', [App\Http\Controllers\PageController::class,'about']);
// Route::get('/articles/{id}', [App\Http\Controllers\PageController::class,'articles']);

// //praktikum 2 no 2
// Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
// Route::get('/about', [App\Http\Controllers\AboutController::class,'about']);
// Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class,'articles']);

//praktikum 3 no 1
// Route::get('/home',[HomeController::class,'index']);


//praktikum 3 no 2
// Route::prefix('product')->group(function () {

//     Route::get('/', [ProductController::class, 'product'] );
// });
// Route::prefix('product')->group(function () {

//     Route::get('/{id}', [ProductController::class, 'products'] );
// });

//praktikum 3 no 3
// Route::get('/news/{name?}', function ($name = null) {
//     if($name){
//         echo '<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19>News '.$name.'</a>';
//     }else{
//         echo '<a href=https://www.educastudio.com/news>Home</a> <br><br> <a href=http://127.0.0.1:8000/news/covid>Covid</a> ';

//     }
//    });

//praktikum 3 no 4
// Route::prefix('program')->group(function () {

//     Route::get('/', [ListProgramController::class, 'list'] );
// });

// Route::prefix('program')->group(function () {

//     Route::get('/{id}', [ListProgramController::class, 'list'] );
// });

//praktikum 3 no 5
// Route::get('/aboutus', function(){
//     return '<a href=https://www.educastudio.com/about-us>https://www.educastudio.com/about-us</a>';
// });

//praktikum 3 no 6
Route::resource('contactus', ContactUsController::class);