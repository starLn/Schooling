<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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
    return view('home', [
        'name' => 'cara fajar', 
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk','semangka', 'kiwi']
    ]);
});

Route::get('/students',[StudentsController::class, 'index']);

// Route::get('/about', function () {
//     return 9*9;
// });

// // '/contact' merupakan akses url
// // 'ada kontroller dengan class terkait di '' ' merupakan akses url

// Route::get('/contact', function () {
//     return view('contact', ['name' => 'cara novita', 'phone' => '0919181910']);
// });

// // Route::view('/contact', 'contact', ['name' => 'cara novita', 'phone' => '0919181910']);

// // Route untuk 'menendang' sebuah halaman
// Route::redirect('/contact', '/contact-us');

// Route::get('/product', function () {
//     return 'product';
// });

// // route dengan parameter
// Route::get('/product/{id}', function ($id) {
// return view ('detail', ['id' => $id]);
// });

// //prefiks untuk mengganti prefiks url meminimalisir waktu ganti url
// Route::prefix('administrator')->group(function () {
//     Route::get('/profil-admin', function (){
//         return 'profil admin';
//     });
    
//     Route::get('/about-admin', function (){
//         return 'about admin';
//     });
    
//     Route::get('/contact-admin', function (){
//         return 'contact admin';
//     });
    
//     Route::get('/profil-admin2', function (){
//         return 'profil admin';
//     });
    
//     Route::get('/about-admin2', function (){
//         return 'about admin';
//     });
    
//     Route::get('/contact-admin2', function (){
//         return 'contact admin';
//     });
    
// });

// //cek list route yang dibuat
// // 1. cek di terminal
// // 2. php artisan route:list
