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
use App\Mail\JustificacionEnvidada;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
////////pablo
Route::get('/Alumno','AlumnoController@index')->name('AlumnosPrincipal');
Route::get('/Alumno/justificaciones/email', function (){
    Mail::to('example@example.com')->send(new JustificacionEnvidada());
    return new JustificacionEnvidada();
});
Route::get('/Alumno/asistencias','AlumnoController@show')->name('AlumnosAsistencia');
Route::get('/Alumno/asistencias/visualizar','AlumnoController@store')->name('AlumnosVisualizar');



///////////Alejandro
Auth::routes();

Route::get('/Areamaestro','AreaMaestroPrincipalController@index')->name('AreaMaestroPrincipal');
Route::get('/Areamaestro/asistencias','AreaMaestroAsistenciaController@index')->name('AreaMaestrosAsistencia');
Route::get('/Areamaestro/asistencias/actualizar','AreaMaestroAsistenciasActualizarController@index')->name('AreaMaestroActualizar');
Route::get('/Areamaestro/reporte','ReporteController@index')->name('AreaMaestroReporte');
Route::get('/Areamaestro/reporte/listo','ReporteListoController@index')->name('AreaMaestroReporteListo');
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
