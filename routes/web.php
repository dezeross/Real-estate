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


Auth::routes();

// ====Back End====
	Route::prefix("password")->group(function(){
		Route::get("/conect-email",'backend\resetPasswordController@view_reset');
		Route::get('/key','backend\resetPasswordController@send_key');
		Route::get('/compare-key','backend\resetPasswordController@compare_key');
		Route::post('/compare-key','backend\resetPasswordController@reset');
	});

	Route::group(array("prefix"=>"admin","middleware"=>"auth"),function(){
	Route::get("logout",function(){
		auth()->logout();
		return redirect('admin/user');
	});
	Route::get('/',function(){
		return redirect(url('admin/user'));
	});
	Route::get("user",'backend\userController@list_user');
	Route::post("user",'backend\userController@add_edit_user');
	Route::get("user/delete/{id}",'backend\userController@delete');

	Route::get("nhan-vien-tu-van",'backend\nhanvienController@list_nhanvien');
	Route::post("nhan-vien-tu-van",'backend\nhanvienController@add_edit_nhanvien');
	Route::get("nhan-vien-tu-van/delete/{id}",'backend\nhanvienController@delete_nhanvien');
	Route::get("du-an-hot",'backend\projectController@list_hot');
	Route::post("du-an-hot",'backend\projectController@edit_project');
	Route::get("du-an-dis/{districtid}",'backend\ajaxController@list_project');
	Route::get("du-an-hot/delete-hot-project/{id}",'backend\projectController@delete_hot');

	Route::get("hinhthuc",'backend\hinhthucController@list_hinhthuc');
	Route::post("hinhthuc",'backend\hinhthucController@add_edit_hinhthuc');
	Route::get("hinhthuc/delete/{id}",'backend\hinhthucController@delete');
	Route::get("loai-nha-dat",'backend\categoryController@list_loai_nha_dat');
	Route::post("loai-nha-dat",'backend\categoryController@add_edit_category');
	Route::get("loai-nha-dat/delete/{id}",'backend\categoryController@delete');
	Route::get("product-estate",'backend\productController@list_product');
	Route::get("product-estate/delete/{id}",'backend\productController@delete');
	Route::post("product-estate",'backend\productController@add_edit_product');
	Route::get("product-estate/choose/{ajax}",'backend\ajaxController@district_ward');
	Route::get("product-estate/delete-img/{c_name}",'backend\ajaxController@delete_img');
	// SEARCH
	Route::get("search-estate",'backend\productController@view_search');
	Route::get("search-estate/do_search/{id}/{keyword}",'backend\ajaxController@search');
	Route::get("search-estate/choose/{id}",'backend\ajaxController@choose');
	Route::get("search-estate/element/{id}/{key}",'backend\ajaxController@element');
	
});

// ====Finish Backend====
// ====Front End====
Route::group(['middleware'=>['web']],function(){
	Route::get('/','frontend\homeController@home');
	Route::get("/districtid/{districtid}",'frontend\ajaxController@view_project');
	Route::get('/search','frontend\searchController@search_home');
	Route::get('/subscribe','frontend\contactController@subscribe');
	Route::get('/cau-hoi-thuong-gap','frontend\faqController@faq');
	Route::get('/ca',function(){
		return "123";
	});


// 
	Route::get('/dang-nhap','frontend\loginController@view_login');
	Route::get("chi-tiet/{id}/{name}",'frontend\detailController@view_detail');
	Route::get("/lien-he","frontend\contactController@view_contact");
	Route::post("/lien-he","frontend\contactController@send_mail");
	Route::prefix("bat-dong-san")->group(function(){
		Route::get("/moi-cap-nhat","frontend\batdongsanController@view_batdongsan");
		Route::get("/gia-thanh-giam","frontend\batdongsanController@view_cdn_desc");
		Route::get("/gia-thanh-tang","frontend\batdongsanController@view_cdn_asc");
		Route::prefix("{name}")->group(function(){
			Route::get("/moi-cap-nhat","frontend\batdongsanController@viewofcategory");
			Route::get("/gia-thanh-giam","frontend\batdongsanController@viewofdesc");
			Route::get("/gia-thanh-tang","frontend\batdongsanController@viewofasc");
		});
	});
	Route::get("/du-an/{projectid}/{project_name}","frontend\batdongsanController@project_est");
});

// ====Finish Frontend====