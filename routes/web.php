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
    return view('home');
});

Route::group(['prefix'=>'admin','middleware'=>'admin1'], function(){
    // show search xt
    Route::get('show-xt','passport_controller@get_showxt');
    Route::get('show-xt/search','passport_controller@get_showxt2');
    // show search xt
    Route::get('show-xd','passport_controller@get_showxd');
    Route::get('show-xd/search','passport_controller@get_showxd2');
    // show search xt
    Route::get('show-lt','passport_controller@get_showlt');
    Route::get('show-lt/search','passport_controller@get_showlt2');
    // show search xt
    Route::get('show-gs','passport_controller@get_showgs');
    Route::get('show-gs/show','passport_controller@get_showgs2');
    // show id xt
    Route::get('show/{id}','resident_controller@get_show');
    Route::post('show/{id}','resident_controller@post_show');
    // send mail xt
    Route::get('sendmail/{id}','resident_controller@get_send_mail');
    Route::post('sendmail/{id}','resident_controller@send_mail');
    // Route::get('luutru/{id}','passport_controller@get_luutru');
    // post mail and update
    Route::get('luutru2/{id}','passport_controller@post_luutru');
    // show id xd
    Route::get('xetduyet/{id}','passport_controller@get_xetduyet');
    Route::post('xetduyet/{id}','passport_controller@post_xetduyet');
    //
    Route::get('signup-admin','admin_controller@get_admin');
    Route::post('signup-admin','admin_controller@post_admin');
    Route::get('home','admin_controller@get_home_admin');
    // Route::get('search_xt','search_controller@get_search_xt');
    // Route::post('search_xt','search_controller@post_search_xt');
    // Route::get('search_xd','search_controller@get_search_xd');
    // Route::post('search_xd','search_controller@post_search_xd');
    // Route::get('search_lt','search_controller@get_search_lt');
    // Route::post('search_lt','search_controller@post_search_lt');
    // Route::get('search_gs','search_controller@get_search_gs');
    // Route::post('search_gs','search_controller@post_search_gs');
    //
    Route::get('log-xt','log_controller@get_log_xt');
    Route::get('log-xt/search','passport_controller@post_log_xt');
    //
    Route::post('error','passport_controller@post_error_mail')->name('post.mail');
    Route::post('error2','passport_controller@post_error_mail2')->name('post.mail2');
    //
    Route::get('log-xd','log_controller@get_log_xd');
    Route::get('log-xd/search','passport_controller@get_log_xd2');
    //
    Route::get('log-lt','log_controller@get_log_lt');
    Route::get('log-lt/search','passport_controller@get_log_lt2');
    //
    // Route::get('search_log_xt','search_controller@get_log_xt');
    // Route::post('search_log_xt','search_controller@post_log_xt');
    // Route::get('search_log_xd','search_controller@get_log_xd');
    // Route::post('search_log_xd','search_controller@post_log_xd');
    // Route::get('search_log_lt','search_controller@get_log_lt');
    // Route::post('search_log_lt','search_controller@post_log_lt');
    Route::get('fix/{id}','admin_controller@get_fix');
    Route::post('fix/{id}','admin_controller@post_fix');
});
Route::get('date','admin_controller@get_date');
Route::group(['prefix'=>'home'], function(){
    Route::get('/', 'admin_controller@get_home');
    Route::get('login','admin_controller@get_login');
    Route::post('login','admin_controller@post_login');
    Route::get('logout','admin_controller@get_logout');
    //Phần User
    Route::get('signup-resident','resident_controller@get_signup');
    Route::post('signup-resident','resident_controller@post_signup');
    Route::get('form_update','resident_controller@get_formupdate')->name('get.link');
    Route::post('form_update','resident_controller@post_formupdate')->name('get.link');
    Route::get('404','resident_controller@get_404');
    Route::get('demo','admin_controller@get_demo');
    Route::post('demo1','admin_controller@post_demo');
});
Route::get('search-passport','passport_controller@get_search_passport');
Route::post('search-passport','passport_controller@post_search_passport');
Route::get('note','passport_controller@get_note');
Route::get('contact','passport_controller@get_contact');
Route::get('extension','passport_extension@get_extension')->name('get.link.extension');
Route::post('extension','passport_extension@post_extension');
// Route::post('extension/{id}','passport_extension@post_extension')->name('post.extension');
Route::group(['prefix'=>'model'], function(){
    Route::get('congdan', function(){
        Schema::create('congdan', function($table){
            $table->increments('id_congdan');
            $table->string('hoten');
            $table->date('ngaysinh');
            $table->string('noisinh');
            $table->string('gioitinh');
            $table->integer('cmnd');
            $table->date('ngaycap');
            $table->string('noicap');
            $table->string('dantoc');
            $table->string('tongiao');
            $table->string('nghenghiep');
            $table->integer('dieukienxd');
            $table->timestamps();
        });
    });
    Route::get('hochieu', function(){
        Schema::create('hochieu', function($table){
            $table->increments('id_hochieu');
            $table->integer('id_congdan')->unsigned();
            $table->integer('id_admin')->unsigned();
            $table->string('checkcode')->nullable();;
            $table->string('hoten');
            $table->date('ngaysinh');
            $table->string('noisinh');
            $table->string('gioitinh');
            $table->integer('cmnd');
            $table->date('ngaycap');
            $table->string('noicap');
            $table->string('dantoc');
            $table->string('tongiao');
            $table->string('email');
            $table->integer('sdt');
            $table->string('dc_thuong_tru');
            $table->string('quanhuyen');
            $table->string('dc_chi_tiet');
            $table->string('dc_tam_tru')->nullable();
            $table->string('quanhuyen_tt')->nullable();
            $table->string('dc_chi_tiet_tt')->nullable();
            $table->string('nghenghiep');
            $table->string('ten_dc_coquan')->nullable();
            $table->string('hoten_cha');
            $table->date('ngaysinh_cha');
            $table->string('hoten_me');
            $table->date('ngaysinh_me');
            $table->string('hoten_vochong');
            $table->date('ngaysinh_vochong');
            $table->integer('tinhtrang');
            $table->timestamp('timecode');
            $table->timestamps();
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('id_congdan')->references('id_congdan')->on('congdan')->onDelete('cascade');
        });
    });
    Route::get('nhatky', function(){
        Schema::create('nhatky', function($table){
            $table->increments('id_nhatky');
            $table->integer('id_admin')->unsigned();
            $table->integer('id_hochieu')->unsigned();
            $table->integer('tinhtrang');
            $table->timestamps();
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('id_hochieu')->references('id_hochieu')->on('hochieu')->onDelete('cascade');
        });
    });
    Route::get('luutru', function(){
        Schema::create('luutru', function($table){
            $table->increments('id_luutru');
            $table->integer('id_hochieu')->unsigned();
            $table->timestamps();
            $table->foreign('id_hochieu')->references('id_hochieu')->on('hochieu')->onDelete('cascade');
        });
    });
});
