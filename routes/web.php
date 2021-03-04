<?php

use App\Jobs\SendMail;

Route::get('/welcome', function () {
 return view('welcome');
});

Route::group(['namespace' => 'Site'], function(){
    Route::get('/', 'HomeController@services')->name('site.home');
});


Route::group(['namespace' => 'Site'], function () {
 Route::post('/', 'ContactController@index')->name('site-sendContact');
});

Route::get('/contato', function () {
 return view('site/contact');
})->name('site.contact');

Route::get('/nossos-clientes', function () {
 return view('site/clients');
})->name('site.clients');

Route::get('/sobre', function () {
 return view('site/about-us');
})->name('site.about-us');

Route::group(['namespace' => 'Site'], function () {
 Route::get('envio-email', function () {
  $request              = new stdClass();
  $request->name        = 'Diego Ferreira';
  $request->email       = 'ideiaeagle@gmail.com';
  $request->phone       = '1243456789';
  $request->subject     = 'Funeraria';
  $request->description = 'Teste de comunicação!';
  //return new \App\Mail\SendMail($request);
  SendMail::dispatch($request)->delay(now()->addSecond('5'));
  //Artisan::call('queue:work');
 });
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Auth'], function () {
 Route::get('/admin', 'LoginController@dashboard')->name('admin.dashborad');
 Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
 Route::post('/login/do', 'LoginController@Login')->name('admin.login.do');
 Route::get('/logout', 'LoginController@logout')->name('admin.logout');

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
 Route::resource('servicos', 'SiteController'); 
});