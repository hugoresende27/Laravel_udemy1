<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    //return "testando";
    return view('welcome');
});
*/
//wildcards nas rotas

/*//MANEIRA 1 RETURN DA STRING 

Route::get('/user/{username}', function (string $username) {
    //return "testando";       
    return "Bem vindo ".$username;
})-> where('username','[a-zA-Z]+');//tratamento com regex(wildcards)
*/


/*//MANEIRA 2 FUNÇÃO RECEBE PARAMETRO DA URL

Route::get('/user/{username}', function (string $username) {
    
    return view ("users", ['username' => $username]);
})-> where('username','[a-zA-Z]+');
*/


//MANEIRA 3 USAR A FUNÇÃO compact() vai criar um array com o valor chave username
/*
Route::get('/user/{username}', function (string $username) {
    
    return view ("users", compact('username'));
})-> where('username','[a-zA-Z]+');
*/


Route::get('/u/me', [UsersController::class, 'getMeProfile'])-> where('username','[a-zA-Z]+')->name('user-profile');
Route::get('/user/{username}', [UsersController::class, 'getProfile'])-> where('username','[a-zA-Z]+');
Route::get('/teste1', [UsersController::class, 'testeResponse']);
Route::get('/teste2', [UsersController::class, 'testeRedirect']);
Route::get('/teste3', [UsersController::class, 'testeRoute']);
Route::get('/teste4', [UsersController::class, 'testeRequest']);
Route::get('/teste5', [UsersController::class, 'testeRequestB']);


Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);




