<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test', function (){
    return "Holla Elias";
});

Route::post('/usuario/{name}', function ($name){
    return "Hola $name";
});
Route::put('/usuario/{name}', function ($name){
    return "Hola $name";
});
Route::patch('/usuario/{name}', function ($name){
    return "Hola $name";
});
Route::delete('/usuario/{id}', function ($id){
    return "O usuario com a $id foi apagado.";
});

Route::get('/random/{min}/{max}', function($min, $max){
    if(!is_numeric($min) || !is_numeric($max)){
        $array = array('msg' => 'Alguma das variaveis nao e numerica');
        return response($array, 400);
    }

    $number_random = rand($min, $max);
    $array = array('number_random' => $number_random);
    return response($array, 200);
});
