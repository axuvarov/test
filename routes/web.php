<?php
$adminURL = env('APP_ADMIN_URL', 'admin');
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
Route::group(
[
    'prefix' => $adminURL,
    'namespace' => 'Admin',
    'as' => 'admin.',
],
function(){
    Route::get('/',['as' => 'dashboard','uses' => 'DashboardController@show']);
}
);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
