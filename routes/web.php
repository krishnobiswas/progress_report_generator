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
Route::get('/','StudentinfoController@index');
Route::get('/add','StudentinfoController@addStudeNT');
Route::get('/view-student','StudentinfoController@viEwstudeNT');
Route::get('/delete-client/{id}','StudentinfoController@DeleTEclient');
Route::get('/edit-student/{id}','StudentinfoController@EditStudent');

/*
 * Subjet Number Controller
 */

Route::get('/sub-num','SubjetNumberController@SubNum');

/*
 *  From Input Controller
 */
Route::post('/save-student-info','FromInputController@SaveStuInfo');
Route::post('/save-student-number','FromInputController@SaveStuNum');
Route::post('/edit_student_info','FromInputController@Update_student');
Route::post('/resut-add','FromInputController@rEsutaDd');

/*
 * Search Controller
 */

Route::post('/search','SearchController@SearchInfO');
Route::post('/home-search','SearchController@SearchhoME');

/*
 * Result Controller
 */

Route::get('/Student-result/{id}','ResultController@StuResT');
Route::get('/add-num/{id}','ResultController@AddNum');

/*
 * Certificate Controller
 */

Route::get('/create-cerificate/{semester}/{stu_id}','CertificateController@CerTiFicaTE');
Route::get('/download-cerificate/{semester}/{stu_id}','CertificateController@pdf');