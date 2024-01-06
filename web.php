<?php

Route::get('storage/link', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
});


Route::get('/', function () {
    return redirect('login');
});

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/preferences', 'HomeController@preferences')->name('preferences');

Route::post('files/single', 'FileController@single')->name('files.single');
Route::post('files/multiple', 'FileController@multiple')->name('files.multiple');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/drivers/{id}/approve', 'DriverController@approve')->name('drivers.approve');
Route::get('/rides/{id}/invoice', 'RideController@invoice')->name('rides.invoice');


Route::get('/reports/drivers', 'ReportController@drivers')->name('reports.drivers');
Route::get('/reports/rides', 'ReportController@rides')->name('reports.rides');

//resources routes
foreach (MODELS as $model) {
    Route::resource(getPlural($model), ucfirst($model) . 'Controller');
}

