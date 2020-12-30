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

Route::group(['middleware' => 'CheckLoginAdmin'], function(){

/*=============================================
=                    Admin                    =
=============================================*/
	// admins
	Route::get('admins','admin_controller@admins')->name('admins');
	Route::post('check_admin_exits','admin_controller@check_admin_exits')->name('check_admin_exits');

	Route::get('add_admin','admin_controller@add_admin')->name('add_admin');

	Route::post('process_add_admin','admin_controller@process_add_admin')->name('process_add_admin');

	Route::get('view_update_admin/{admin_id}','admin_controller@view_update_admin')->name('view_update_admin');

	Route::post('process_update_admin/{admin_id}','admin_controller@process_update_admin')->name('process_update_admin');

	Route::get('delete_admin/{admin_id}','admin_controller@delete_admin')->name('delete_admin');



	// majors
	Route::get('majors','admin_controller@majors')->name('majors');

	Route::get('add_major','admin_controller@add_major')->name('add_major');

	Route::post('check_major_exits','admin_controller@check_major_exits')->name('check_major_exits');

	Route::get('view_update_major/{major_id}','admin_controller@view_update_major')->name('view_update_major');

	Route::post('check_major_exits_for_update/{major_id}','admin_controller@check_major_exits_for_update')->name('check_major_exits_for_update');
	Route::get('check_major_for_delete/{major_id}','admin_controller@check_major_for_delete')->name('check_major_for_delete');
	Route::get('delete_major/{major_id}','admin_controller@delete_major')->name('delete_major');



	// new_categories
	Route::get('new_categories','admin_controller@new_categories')->name('new_categories');

	Route::get('add_new_category','admin_controller@add_new_category')->name('add_new_category');

	Route::post('check_new_category_exits','admin_controller@check_new_category_exits')->name('check_new_category_exits');

	Route::get('view_update_new_category/{category_id}','admin_controller@view_update_new_category')->name('view_update_new_category');

	Route::post('process_update_new_category/{category_id}','admin_controller@process_update_new_category')->name('process_update_new_category');

	Route::get('check_new_category_to_delete/{category_id}','admin_controller@check_new_category_to_delete')->name('check_new_category_to_delete');


	// news
	Route::get('news','admin_controller@news')->name('news');

	Route::get('add_new','admin_controller@add_new')->name('add_new');

	Route::post('process_add_new','admin_controller@process_add_new')->name('process_add_new');

	Route::get('view_update_new/{new_id}','admin_controller@view_update_new')->name('view_update_new');

	Route::post('process_update_new/{new_id}','admin_controller@process_update_new')->name('process_update_new');

	Route::get('delete_new/{new_id}','admin_controller@delete_new')->name('delete_new');




	// pantients
	Route::get('patients','admin_controller@patients')->name('patients');
	Route::get('view_add_patient','admin_controller@view_add_patient')->name('view_add_patient');

	Route::post('check_patient_exits','admin_controller@check_patient_exits')->name('check_patient_exits');

	Route::get('view_update_patient/{patient_id}','admin_controller@view_update_patient')->name('view_update_patient');

	Route::post('process_update_patient/{patient_id}','admin_controller@process_update_patient')->name('process_update_patient');

	Route::get('delete_patient/{patient_id}','admin_controller@delete_patient')->name('delete_patient');



	// patient_records
	Route::get('patient_records','admin_controller@patient_records')->name('patient_records');
	Route::get('view_add_patient_record','admin_controller@view_add_patient_record')->name('view_add_patient_record');

	Route::post('process_add_patient_record','admin_controller@process_add_patient_record')->name('process_add_patient_record');

	Route::get('view_update_patient_record/{patient_id}','admin_controller@view_update_patient_record')->name('view_update_patient_record');

	Route::post('process_update_patient_record/{patient_id}','admin_controller@process_update_patient_record')->name('process_update_patient_record');

	Route::get('delete_patient_record/{patient_id}','admin_controller@delete_patient_record')->name('delete_patient_record');


	// doctors
	Route::get('doctors_mgt','admin_controller@doctors_mgt')->name('doctors_mgt');

	Route::get('add_doctor','admin_controller@add_doctor')->name('add_doctor');

	Route::post('check_doctor_exits','admin_controller@check_doctor_exits')->name('check_doctor_exits');

	Route::get('view_update_doctor/{doctor_id}','admin_controller@view_update_doctor')->name('view_update_doctor');

	Route::post('process_update_doctor/{doctor_id}','admin_controller@process_update_doctor')->name('process_update_doctor');

	Route::get('delete_doctor/{doctor_id}','admin_controller@delete_doctor')->name('delete_doctor');

	// Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');


	// demo
	Route::get('get_doctor_by_major', 'admin_controller@get_doctor_by_major')->name('get_doctor_by_major');
	Route::get('select_doctor', 'admin_controller@select_doctor')->name('select_doctor');
	Route::get('get_chart', 'admin_controller@get_chart')->name('get_chart');
	Route::get('get_chart_monthly', 'admin_controller@get_chart_monthly')->name('get_chart_monthly');



	Route::get('get_order_by_doctor', 'admin_controller@get_shift_by_doctor')->name('get_shift_by_doctor');


	// doctors
	Route::get('get_stat_this_doctor/{doctor_id}','admin_controller@get_stat_this_doctor')->name('get_stat_this_doctor');
	Route::get('get_stat_doctors_daily','admin_controller@get_stat_doctors_daily')->name('get_stat_doctors_daily');


	Route::get('get_stat_doctors_monthly','admin_controller@get_stat_doctors_monthly')->name('get_stat_doctors_monthly');

	Route::get('your_informations/{doctor_id}','admin_controller@your_informations')->name('your_informations');
	Route::get('picture','admin_controller@picture')->name('picture');
	Route::post('post_picture','admin_controller@post_picture')->name('post_picture');

	Route::get('demo','admin_controller@demo')->name('demo');
	Route::get('get_list_admin_calendar','admin_controller@get_list_admin_calendar')->name('get_list_admin_calendar');
	

	

});




// login_admin


Route::get('login_admin','admin_controller@login_admin')->name('login_admin');
Route::post('process_login_admin','admin_controller@process_login_admin')->name('process_login_admin');
Route::get('check_admin','admin_controller@check_admin_admin')->name('check_admin_admin');

Route::get('logout_admin','admin_controller@logout_admin')->name('logout_admin');

/*=====  End of Section comment block  ======*/








/*=============================================
=                    Doctor                   =
=============================================*/

Route::group(['middleware' => 'CheckLoginDoctor'], function(){
	Route::get('change_password_for_doctor','doctor_controller@change_password_for_doctor')->name('change_password_for_doctor');
	Route::get('view_information_doctor/{doctor_id}','doctor_controller@view_information_doctor')->name('view_information_doctor');
	Route::post('process_change_password_for_doctor/{doctor_id}','doctor_controller@process_change_password_for_doctor')->name('process_change_password_for_doctor');
	Route::get('patient_record_mgt','doctor_controller@patient_record_mgt')->name('patient_record_mgt');
	Route::get('view_todo_list','doctor_controller@view_todo_list')->name('view_todo_list');
	Route::get('get_todo_list/{doctor_id}','doctor_controller@get_todo_list')->name('get_todo_list');
	Route::get('get_doctor_record_for_doctor','doctor_controller@get_doctor_record_for_doctor')->name('get_doctor_record_for_doctor');

	

});

// login_doctor
Route::get('login_doctor','doctor_controller@login_doctor')->name('login_doctor');
Route::post('process_login_doctor','doctor_controller@process_login_doctor')->name('process_login_doctor');
Route::get('check_doctor','doctor_controller@check_doctor_doctor')->name('check_doctor_doctor');

Route::get('logout_doctor','doctor_controller@logout_doctor')->name('logout_doctor');

/*=====  End of Section comment block  ======*/








/*=============================================
=            		Patients                  =
=============================================*/
Route::group(['middleware' => 'CheckLoginUser'], function() {
    
Route::get('patient','patient_controller@patient')->name('patient');
Route::get('set_appointment','patient_controller@set_appointment')->name('set_appointment');
Route::get('all_doctor','patient_controller@all_doctor')->name('all_doctor');
Route::get('get_doctor_by_major_for_user', 'patient_controller@get_doctor_by_major_for_user')->name('get_doctor_by_major_for_user');
Route::get('get_order_by_doctor_for_user', 'patient_controller@get_shift_by_doctor_for_user')->name('get_shift_by_doctor_for_user');
Route::post('process_add_patient_appointment','patient_controller@process_add_patient_appointment')->name('process_add_patient_appointment');

Route::get('view_infomation_for_user/{patient_id}', 'patient_controller@view_infomation_for_user')->name('view_infomation_for_user');
Route::get('change_password_for_user/{patient_id}', 'patient_controller@change_password_for_user')->name('change_password_for_user');
Route::post('process_change_password_for_user/{patient_id}', 'patient_controller@process_change_password_for_user')->name('process_change_password_for_user');
Route::get('view_all_appointment','patient_controller@view_all_appointment')->name('view_all_appointment');
Route::get('delete_appointment/{record_id}','patient_controller@delete_appointment')->name('delete_appointment');


});
// patient_login
Route::get('login_patient','patient_controller@login_patient')->name('login_patient');
Route::post('process_login_patient','patient_controller@process_login_patient')->name('process_login_patient');
Route::get('check_patient','patient_controller@check_admin_patient')->name('check_admin_patient');
Route::post('process_register','patient_controller@process_register')->name('process_register');
Route::get('logout_patient','patient_controller@logout_patient')->name('logout_patient');



/*=====  End of Section comment block  ======*/

/*=============================================
=                    Homepage                 =
=============================================*/
Route::get('index','HomepageController@index')->name('index');
Route::get('session_index','HomepageController@session_index')->name('session_index');






	



