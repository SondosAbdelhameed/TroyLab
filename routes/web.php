<?php

use Illuminate\Support\Facades\Route;
//use Auth;

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
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__.'/auth.php';
//Auth::routes(['register' => false]);

Route::group([
      'middleware' => ['auth'],
  ], function(){
    Route::get('/home','HomeController@index')->name('home');

    Route::group([
          'middleware' => ['admin'],
          'prefix' => 'admin',
          'namespace' => 'Admin'
      ], function(){
        Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
        Route::resource('mschool','SchoolController');
        Route::resource('mstudent','StudentController');
        Route::resource('login_access','LoginAccessController');

        Route::get('school_activation/{id}/{status}','SchoolController@activation')->name('school_activation');
      });
});
//require __DIR__.'/auth.php';
