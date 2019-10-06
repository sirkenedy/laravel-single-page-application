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
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    //All the admin routes will be defined here...
    Route::middleware(['preventBackHistory'])->group(function () {
        // These will be prefixed with "manager" and assigned the "manager_guest" middleware
        Route::get('/dashboard','HomeController@index')->name('dashboard')->middleware('auth:admin');
        Route::get('/services','ServiceController@index')->name('services')->middleware('auth:admin');
        Route::put('/services/{id}',['uses'=>'ServiceController@update', 'as'=>'services.update']);
        Route::get('/about','AboutController@index')->name('about')->middleware('auth:admin');
        Route::get('/portfolio','PortfolioController@index')->name('portfolio')->middleware('auth:admin');
        Route::get('/profile','ProfileController@index')->name('profile')->middleware('auth:admin');
        Route::get('/user','UserController@index')->name('user')->middleware('auth:admin');
        Route::get('/team','TeamController@index')->name('team')->middleware('auth:admin');
    });
    

    //Login Routes
    Route::namespace('Auth')->group(function(){
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');
    });
});


Route::post('admin/services/store',['uses'=>'ServiceController@store', 'as'=>'services.store']);

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
// Route::get('/port', function () {
//     return view('admin.manage_portfolio');
// });
// Route::get('/about', function () {
//     return view('admin.manage_about');
// });
// Route::get('/team', function () {
//     return view('admin.manage_team');
// });
// Route::get('/user', function () {
//     return view('admin.manage_user');
// });
// Route::get('/service', function () {
//     return view('admin.manage_services');
// });
// Route::get('/profile', function () {
//     return view('admin.profile');
// });
Route::put('/services/{id}', function () {
    return response()->json($id);
});
Route::resource('', 'HomesController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
