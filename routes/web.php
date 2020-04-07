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


////////pablo
Route::get('/Alumno','AlumnoController@index')->name('AlumnosPrincipal');

Route::post('/Alumno/justificaciones/justificacionenviada', 'EmailController@contact')->name('contact');

Route::get('/Alumno/asistencias','AlumnoController@show')->name('AlumnosAsistencia');
Route::get('/Alumno/asistencias/visualizar','AlumnoController@store')->name('AlumnosVisualizar');


///////pablo

///////////Alejandro
Auth::routes();


//Alex
Route::get('/Areamaestro','AreaMaestroPrincipalController@index')->name('AreaMaestroPrincipal');
Route::get('/Areamaestro/asistencias','AreaMaestroAsistenciaController@index')->name('AreaMaestrosAsistencia');
Route::get('/Areamaestro/asistencias/actualizar','AreaMaestroAsistenciasActualizarController@index')->name('AreaMaestroActualizar');

Route::get('/Areamaestro/reporte','ReporteController@index')->name('AreaMaestroReporte');
Route::get('/Areamaestro/reporte/listo','ReporteListoController@index')->name('AreaMaestroReporteListo');

//Alex




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




Route::get('/DirectorLogin','AreaCarreraPrincipalController@index')->name('AreaCarreraPrincipal');
Route::get('/GenerarReporteDirector','AreaCarreraPrincipalController@index2')->name('AreaCarreraReporte');
Route::get('/TablaAsistenciasDirector','AreaCarreraPrincipalController@index3')->name('AreaCarreraTabla');
Route::get('pdf', 'PDFmaker@PDFasistencias')->name('GenerarPDF');







///////////ramiro

Route::get('/AdminPrincipal','AdminAreaPrincipalController@index')->name('Principal');

Route::get('/HorariosImportarAdmin','AdminImportarHorariosController@index')->name('getHorariosImportados');

Route::get('/MaestrosImportarAdmin','AdminImportarMaestrosController@index')->name('getMaestrosImportados');

Route::get('/AlumnosImportarAdmin','AdminImportarAlumnosController@index')->name('getAlumnosImportados');

Route::get('/MateriasImportarAdmin','AdminImportarMateriasController@index')->name('getMateriasImportadas');


Route::post('storage/AlumnosCSV','AdminImportarAlumnosController@enviarchivo')->name('AlumnosImportados');
Route::post('storage/HorariosCSV','AdminImportarHorariosController@enviarchivo')->name('HorariosImportados');
Route::post('storage/MateriasCSV','AdminImportarMateriasController@enviarchivo')->name('MateriasImportadas');
Route::post('storage/MaestrosCSV','AdminImportarMaestrosController@enviarchivo')->name('MaestrosImportados');















//Route::get('/import', 'AdminImportarMaestrosController@import')->name('maestros');
Route::post('/import', 'AdminImportarMaestrosController@import')->name('import');














Route::get('alumnocsv', function () 
{
    if (($handle = fopen(public_path(),'/alumno.csv','alumno')) !== FALSE) 
    {
        while (($data= fgetcsv($handle,100,',')) !== FALSE) 
        {
            $dato = new prueba();
            $dato->nombre = $data[0];
            $dato->apellido1 = $data[1];
            $dato->apellido2 = $data[2];
            $dato->save();
        }
        fclose($handle);
    }
    return $dato::all();

});
///////////ramiro
