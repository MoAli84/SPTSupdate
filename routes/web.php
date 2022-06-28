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
    return view('welcome');
});

//---------------------------Year----------------------------------------
Route::get('admin/index/year','adminController@index_year');
Route::get('admin/create/year','adminController@create_year');
Route::post('admin/store/year','adminController@store_year');
Route::get('admin/edit/year/{id}','adminController@edit_year');
Route::post('admin/update/year','adminController@update_year');
Route::delete('admin/delete/year/{id}','adminController@destroy_year');
//--------------------------End Year-------------------------------------


//---------------------------Education Level-------------------------
Route::get('admin/index/level','adminController@index_level');
Route::get('admin/create/level','adminController@create_level');
Route::post('admin/store/level','adminController@store_level');
Route::get('admin/edit/level/{id}','adminController@edit_level');
Route::post('admin/update/level','adminController@update_level');
Route::delete('admin/delete/level/{id}','adminController@destroy_level');


//--------------------------end Education level--------------------------

//---------------------------start Sublevel-----------------------------
Route::get('admin/index/sublevel','adminController@index_sublevel');
Route::get('admin/create/sublevel','adminController@create_sublevel');
Route::post('admin/store/sublevel','adminController@store_sublevel');
Route::get('admin/edit/sublevel/{id}','adminController@edit_sublevel');
Route::post('admin/update/sublevel','adminController@update_sublevel');
Route::delete('admin/delete/sublevel/{id}','adminController@destroy_sublevel');
//----------------------------End sublevel----------------------------------


//-------------------------------Start Nationality---------------------------
Route::get('admin/index/nationality','adminController@index_nationality');
Route::get('admin/create/nationality','adminController@create_nationality');
Route::post('admin/store/nationality','adminController@store_nationality');
Route::get('admin/edit/nationality/{id}','adminController@edit_nationality');
Route::post('admin/update/nationality','adminController@update_nationality');
Route::delete('admin/delete/nationality/{id}','adminController@destroy_nationality');
// -------------------------------End Nationality----------------------------

//--------------------------------Start Course------------------------------
Route::get('admin/index/course','adminController@index_course');
Route::get('admin/create/course','adminController@create_course');
Route::post('admin/store/course','adminController@store_course');
Route::get('admin/edit/course/{id}','adminController@edit_course');
Route::post('admin/update/course','adminController@update_course');
Route::delete('admin/delete/course/{id}','adminController@destroy_course');
//---------------------------------End Course-----------------------------
//---------------------------governorate----------------------------------------
Route::get('admin/index/governorate','adminController@index_governorate');
Route::get('admin/create/governorate','adminController@create_governorate');
Route::post('admin/store/governorate','adminController@store_governorate');
Route::get('admin/edit/governorate/{id}','adminController@edit_governorate');
Route::post('admin/update/governorate','adminController@update_governorate');
Route::delete('admin/delete/governorate/{id}','adminController@destroy_governorate');
//--------------------------End governorate-------------------------------------

//---------------------------Town----------------------------------------
Route::get('admin/index/town','adminController@index_town');
Route::get('admin/create/town','adminController@create_town');
Route::post('admin/store/town','adminController@store_town');
Route::get('admin/edit/town/{id}','adminController@edit_town');
Route::post('admin/update/town','adminController@update_town');
Route::delete('admin/delete/town/{id}','adminController@destroy_town');
//--------------------------End Town-------------------------------------

//---------------------------District----------------------------------------
Route::get('admin/index/district','adminController@index_district');
Route::get('admin/create/district','adminController@create_district');
Route::post('admin/store/district','adminController@store_district');
Route::get('admin/edit/district/{id}','adminController@edit_district');
Route::post('admin/update/district','adminController@update_district');
Route::delete('admin/delete/district/{id}','adminController@destroy_district');
//--------------------------End district-------------------------------------

//-------------------------StudentAffairs--------------------------
Route::get('affair/home','StudentAffairController@home');
Route::get('affair/index','studentAffairController@index');
Route::get('affair/create','studentAffairController@create');
Route::post('affair/store','studentAffairController@store');
Route::get('affair/edit/{id}','studentAffairController@edit');
Route::post('affair/update','studentAffairController@update');
Route::delete('affair/delete/{studentSsn}','studentAffairController@destroy');
Route::get('affair/show/{StudentSsn}','studentAffairController@show');

Route::get('affair/index/one','studentAffairController@f1');
Route::get('affair/index/two','studentAffairController@f2');
Route::get('affair/index/three','studentAffairController@f3');
Route::get('affair/index/four','studentAffairController@f4');
Route::get('affair/index/five','studentAffairController@f5');
Route::get('affair/index/sex','studentAffairController@f6');
Route::get('affair/index/seven','studentAffairController@f7');
Route::get('affair/index/eight','studentAffairController@f8');
Route::get('affair/index/nine','studentAffairController@f9');
Route::get('affair/index/ten','studentAffairController@f10');
Route::get('affair/index/eleven','studentAffairController@f11');
Route::get('affair/index/twelve','studentAffairController@f12');


//--------------------------- End StudentAffair------------------------------------

//-------------------------Doctor--------------------------
Route::get('doctor/home','DoctorController@home');
Route::get('doctor/index','DoctorController@index');
Route::get('doctor/edit/{id}','DoctorController@edit');
Route::post('doctor/update','DoctorController@update');
Route::delete('doctor/delete/{id}','DoctorController@destroy');
Route::get('doctor/show/{StudentSsn}','DoctorController@show');



Route::get('doctor/index/one','DoctorController@d1');
Route::get('doctor/index/two','DoctorController@d2');
Route::get('doctor/index/three','DoctorController@d3');
Route::get('doctor/index/four','DoctorController@d4');
Route::get('doctor/index/five','DoctorController@d5');
Route::get('doctor/index/sex','DoctorController@d6');
Route::get('doctor/index/seven','DoctorController@d7');
Route::get('doctor/index/eight','DoctorController@d8');
Route::get('doctor/index/nine','DoctorController@d9');
Route::get('doctor/index/ten','DoctorController@d10');
Route::get('doctor/index/eleven','DoctorController@d11');
Route::get('doctor/index/twelve','DoctorController@d12');

//--------------------------- End Doctor------------------------------------

