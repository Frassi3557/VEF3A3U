<?php

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

use App\Books;

#Route::get('/', function () {
#    return view('verkefni3');
#});

Route::get('/', 'V3Controller@index');
Route::get('/books/{id}', 'V3Controller@show');


#Route::get('/books/{number?}', function ($number = null) {
#  $books = array("Bók 1", "Bók 2", "Bók 3");
#  $output = $books[$number-1];
#    if ($number == null) {
#         return 'Engin bók hér.';
#    }
#    return $output;
#});
