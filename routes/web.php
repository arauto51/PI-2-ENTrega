<?php
use App\Http\Controllers\Controller;
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
Route::get('/teste', 'App\Http\Controllers\EstudanteController@teste');
//route::resource('estudantes', App\Http\Controllers\EstudanteController::class);
//rotas das paginas
Route::get('/editarProduto/{id}', 'App\Http\Controllers\EstudanteController@index7')->name('editarProd');
Route::get('/listausuario1', 'App\Http\Controllers\EstudanteController@index6');
Route::get('/paginausuario', 'App\Http\Controllers\EstudanteController@index5')->name('paginaUsuario');
Route::get('/lista', 'App\Http\Controllers\EstudanteController@index4');
Route::get('/produto', 'App\Http\Controllers\EstudanteController@index2')->name('produto');
Route::get('/Principal', 'App\Http\Controllers\EstudanteController@index1')->name('principal');
Route::get('/', 'App\Http\Controllers\EstudanteController@index')->name('inicial');
//cadastro usuario
Route::get('/cadastro', 'App\Http\Controllers\EstudanteController@create')->name('estudante');
Route::post('/cadastro', 'App\Http\Controllers\EstudanteController@store')->name('estudante');
//cadastro produto
Route::get('/cadastroP', 'App\Http\Controllers\EstudanteController@create1')->name('cadastroP');
Route::post('/cadastroP', 'App\Http\Controllers\EstudanteController@store1')->name('cadastroP');


//Route::get('/ver/{id}', 'App\Http\Controllers\EstudanteController@show1');
//Route::delete('/delete', 'App\Http\Controllers\EstudanteController@destroy')->name('deletep');

// editar usuario
Route::get('/editar/{id}', 'App\Http\Controllers\EstudanteController@edit1');
Route::post('/editar/{id}', 'App\Http\Controllers\EstudanteController@update1')->name('alterar_produto');

//editar produto
Route::get('/editarProduto/{id}', 'App\Http\Controllers\EstudanteController@edit2')->name('alterar');
Route::post('/editarProduto/{id}', 'App\Http\Controllers\EstudanteController@update2')->name('alterar');

//excluir produto
Route::get('/deletarProduto/{id}', 'App\Http\Controllers\EstudanteController@delete1');
Route::post('/deletarProduto/{id}', 'App\Http\Controllers\EstudanteController@destroy1')->name('deletarProduto');