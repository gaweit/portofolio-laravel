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




Route::get('/install/check/{param}','Installer\InstallerController@check')->name('install.check');

Route::get('404',function(){
	return abort(404);
})->name('404');
//HomePage route
Route::get('/', 'WelcomeController@welcome')->name('welcome');
//Laravel default auth route
Auth::routes();
//homepage contact route
Route::post('contact','ContactController@store')->name('contact.store');

Route::get('pre/install','Installer\InstallerController@preinstall')->name('preinstall');
Route::get('/install','Installer\InstallerController@install')->name('install')->middleware('installer');
Route::get('/install/info','Installer\InstallerController@info')->name('install.info');
Route::post('/install/store','Installer\InstallerController@send');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All admin routes are here. 
| 
*/
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>'auth'],function(){
	//Admin Dashboard route
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	//about resouce route
	Route::resource('about','AboutController');
	//expreince resource route
	Route::resource('experience','ExeperinceController');
	Route::get('expreince/destroy/{id}','ExeperinceController@destroy')->name('expreinces.delete');
	//skill resource route
	Route::resource('skill','SkillController');
	Route::get('skills/destroy/{id}','SkillController@destroy')->name('skills.delete');
	//service resouce route
	Route::resource('service','ServiceController');
	Route::get('services/destroy/{id}','ServiceController@destroy')->name('services.delete');
	//porfolio resouce route
	Route::resource('portfolio','PortfolioController');
	Route::get('portfolios/destroy/{id}','PortfolioController@destroy')->name('portfolios.delete');
	//testimonial resouce route
	Route::resource('testimonial','TestimonialController');
	Route::get('testimonials/destroy/{id}','TestimonialController@destroy')->name('testimonials.delete');
	//subscriber resource route
	Route::resource('subscriber','SubscriberController');
	//language resource route
	Route::resource('language','LangController');
	//menu resource route
	Route::resource('menu','MenuController');
	//contact resource route
	Route::resource('contact','ContactController');
	//social resource route
	Route::resource('social','SocialController');
	Route::get('socials/destroy/{id}','SocialController@destroy')->name('socials.destroy');

	Route::resource('social','SocialController');
	Route::get('socials/destroy/{id}','SocialController@destroy')->name('socials.destroy');

	Route::resource('tagline','TaglineController');
	Route::get('tagline/destroy/{id}','TaglineController@destroy')->name('taglines.destroy');
	//Category resource route
	Route::resource('category','CategoryController');
	Route::get('categorys/destroy/{id}','CategoryController@destroy')->name('categorys.delete');
	//SEO resource route
	Route::resource('seo','SeoController');
	Route::resource('custom','CJController');
	//site settings resource route
	Route::resource('settings','SettingsController');
	//Admin settings route
	Route::get('/mysettings','UserController@index')->name('admin.mysettings');
	Route::post('genup','UserController@genUpdate')->name('users.genupdate');
	Route::post('passup','UserController@updatePassword')->name('users.passup');

});
