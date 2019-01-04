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

Route::get('/', function () {
    return view('noneadmin.pages.welcome');
});

    Route::get('/services', 'PagesController@getServices');
    Route::get('/team', 'PagesController@getTeam');
    Route::get('/gallery', 'PagesController@getGallery');
    Route::get('/contact', 'PagesController@getContact');


 Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

//Dashboards
Route::get('/dashboard', 'HomeController@index')->name('home');

// Administrator & SuperAdministrator Control Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth','middleware'=>'role:superadministrator|administrator|editor','namespace' => 'Admin'], function () {

    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::get('users/{id}/delete', 'DeleteUserController@deleteUser')->name('users.delete');
    Route::get('roles/{id}/delete','DeleteUserController@deleteRole')->name('roles.delete');
    Route::get('permissions/{id}/delete', 'DeleteUserController@deletePermission')->name('permissions.delete');
});
// 