<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Saludo; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hola',function (){
    return view('welcome');
});

Route::get('/{name}/{lastN}',[Saludo::class, 'saludo']); 


Route::get('/pagina1/{nombre}/{apellido}', function ($nombre, $apellido) {
    return getNames($nombre, $apellido);
});


Route::get('/pagina2/{num1}/{num2}', function ($num1, $num2) {
    return operar($num1, $num2);
});

Route::get('/pagina3', function () {

    $user = 'Vicente';
    return view('vista3',['nombre'=>$user]);
});
Route::get('/pagina4', function () {
    return view('vista4');
});

function getNames($nombre, $apellido)
{
    if (!is_numeric($nombre) && !is_numeric($apellido)) {
        return 'hola ' . $nombre . ' ' . $apellido;
    } else {
        return 'Solo texto es permitido';
    };
}

function operar($num1, $num2)
{
    if (is_numeric($num1) && is_numeric($num2)) {
        return 'la multiplicacion es: ' . $num1 * $num2 . '<br>' . 'la divicion es: ' . $num1 / $num2 . '<br>' . 'la suma es: ' . $num1 + $num2 . '<br>' . 'la resta es: ' . $num1 - $num2;
    } else {
        return  'Solo numeros son permitidos';
    }
};

