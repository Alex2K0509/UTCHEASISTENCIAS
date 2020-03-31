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

////////pablo
Route::get('/Alumno','AlumnoController@index')->name('AlumnosPrincipal');
Route::get('/Alumno/justificaciones','AlumnoJustificanteController@index')->name('AlumnosJustificaciones');
Route::get('/Alumno/asistencias','AlumnoAsistenciaController@index')->name('AlumnosAsistencia');
///////////pablo

///////////Alejandro
Auth::routes();
Route::get('/Areamaestro','AreaMaestroPrincipalController@index')->name('AreaMaestroPrincipal');
Route::get('/Areamaestro/asistencias','AreaMaestroAsistenciaController@index')->name('AreaMaestrosAsistencia');
Route::get('/Areamaestro/asistencias/actualizar','AreaMaestroAsistenciasActualizarController@index')->name('AreaMaestroActualizar');
Route::get('/Areamaestro/reporte','ReporteController@index')->name('AreaMaestroReporte');
Route::get('/Areamaestro/reporte/listo','ReporteListoController@index')->name('AreaMaestroReporteListo');

Route::post('/Asistencia/{id}','AreaMaestroAsistenciasActualizarController@update')->name('Asistencia.update');

Route::get('/Asistencia','AreaMaestroAsistenciasActualizarController@test')->name('Asistencia.test');
Route::get('/pdf','PDFController@PDF')->name('reporte');
///////////Aleajndro




///////////max
Route::get('/DirectorLogin','AreaCarreraPrincipalController@index')->name('AreaCarreraPrincipal');
Route::get('/GenerarReporteDirector','AreaCarreraSubController@index')->name('AreaCarreraReporte');
Route::get('/TablaAsistenciasDirector','AreaCarreraTribController@index')->name('AreaCarreraTabla');
///////////max


///////////ramiro
Route::get('/AdminPrincipal','AdminAreaPrincipal@index')->name('Principal');
Route::get('/HorariosImportarAdmin','AdminImportarHorarios@index')->name('HorariosImportados');
Route::get('/MaestrosImportarAdmin','AdminImportarMaestros@index')->name('MaestrosImportados');
Route::get('/AlumnosImportarAdmin','AdminImportarAlumnos@index')->name('AlumnosImportados');
Route::get('/MateriasImportarAdmin','AdminImportarMaterias@index')->name('MateriasImportadas');
///////////ramiro