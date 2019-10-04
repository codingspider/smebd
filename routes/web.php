<?php

Route::get('/', 'HomeController@index');

Route::get('sme/bankers/news/details/{id}', 'DetailsController@bankers_news');
Route::get('sme/fashion/news/details/{id}', 'DetailsController@fashon_news');
Route::get('sme/miscelleneous/news/details/{id}', 'DetailsController@miscelleneous_news');
Route::get('sme/technology/news/details/{id}', 'DetailsController@technology_news');
Route::get('sme/blog/news/details/{id}', 'DetailsController@blog_news');

Route::get('sme/blog', 'BlogController@index');
Route::get('sme/news/post', 'NewsController@news');
Route::get('news/submit', 'NewsController@news');

Route::post ('/user/register', 'LoginController@register');



Route::get('apply/for/loan', 'LoanController@form')->middleware('auth');

Route::get('list/loan/request', 'LoanController@loan_request');

Route::get('list/loan/view/{id}', 'LoanController@loan_request_details');
Route::get('list/loan/approve/{id}', 'LoanController@loan_request_approve');
Route::get('list/loan/cancel/{id}', 'LoanController@loan_request_cancel');
Route::get('list/loan/delete/{id}', 'LoanController@loan_request_delete');

Route::post('loan/aplication/form/submit', 'LoanController@create');



//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
