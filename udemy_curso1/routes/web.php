<?php

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

Route::get('/', function () {
    //return "testando";
    return view('welcome');
});

/*//MANEIRA 1 RETURN DA STRING
Route::get('/user/{username}', function (string $username) {
    //return "testando";
    return "Bem vindo ".$username;
})-> where('username','[a-zA-Z]+');//tratamento com regex
*/
/*//MANEIRA 2 FUNÇÃO RECEBE PARAMETRO DA URL
Route::get('/user/{username}', function (string $username) {
    
    return view ("users", ['username' => $username]);
})-> where('username','[a-zA-Z]+');
*/
//MANEIRA 3 USAR A FUNÇÃO compact() vai criar um array com o valor chave username
Route::get('/user/{username}', function (string $username) {
    
    return view ("users", compact('username'));
})-> where('username','[a-zA-Z]+');