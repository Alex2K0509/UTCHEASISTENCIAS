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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//pablo
Route::get('/Alumno','AlumnoController@index')->name('AlumnosPrincipal');
Route::get('/Alumno/justificaciones','AlumnoJustificanteController@index')->name('AlumnosJustificaciones');
Route::get('/Alumno/asistencias','AlumnoAsistenciaController@index')->name('AlumnosAsistencia');
//pablo
Route::get('/Areamaestro','AreaMaestroPrincipalController@index')->name('AreaMaestroPrincipal');
Route::get('/Areamaestro/asistencias','AreaMaestroAsistenciaController@index')->name('AreaMaestrosAsistencia');
Route::get('/Areamaestro/asistencias/actualizar','AreaMaestroAsistenciasActualizarController@index')->name('AreaMaestroActualizar');
//estas rutas son para la primera area, la de asistencias, las que siguen son para generar los reportes
Route::get('/Areamaestro/reporte','ReporteController@index')->name('AreaMaestroReporte');
Route::get('/Areamaestro/reporte/listo','ReporteListoController@index')->name('AreaMaestroReporteListo');

<<<<<<< HEAD
=======
//Rutas Max
Route::get('/Areacarrera','AreaCarreraPrincipalController@index')->name('AreaCarreraPrincipal');
Route::get('/Areacarrera2','AreaCarreraSubController@index')->name('AreaCarreraSub');
Route::get('/Areacarrera3','AreaCarreraTribController@index')->name('AreaCarreraTrib');
>>>>>>> 8a76cfbaea16940fab1e1e2d0b93558caa4f3940
