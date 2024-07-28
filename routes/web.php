<?php


use App\Http\Controllers\SimuladorController;
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
    return view('welcome');
});

//Rutas para areas
Route::resource('areas', 'AreaController');
//=======APIS PARA ACORTADORES========================
Route::resource('p', 'LinkAcortadorController');
Route::get('filtroLibros', 'LinkAcortadorController@filtroLibros');

