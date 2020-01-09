<?php

Route::get('/', function(){
    return view ('index');
});

Route::get('/news', 'HomeController@index');
Route::get('/show/vote/form', 'VoteController@index');
Route::post('/check/auth/vote/form', 'VoteController@voter_validation');
Route::post('/voter/passcode/change', 'VoteController@voter_passcode_change');

Route::post('/president/vote/submited', 'VoteController@store')->name('vote-submit');

Route::get('/post/by/user/{news_provider}', 'HomeController@post_by');
Route::get('sme/bankers/news/details/{id}', 'DetailsController@bankers_news');
Route::get('top/stories/{id}', 'DetailsController@top_stories');
Route::get('breaking/news/details/{id}', 'DetailsController@breaking_news');
Route::get('sme/fashion/news/details/{id}', 'DetailsController@fashon_news');
Route::get('sme/miscelleneous/news/details/{id}', 'DetailsController@miscelleneous_news');
Route::get('sme/technology/news/details/{id}', 'DetailsController@technology_news');
Route::get('sme/blog/news/details/{id}', 'DetailsController@blog_news');

Route::get('sme/blog', 'BlogController@index');
Route::get('sme/news/post', 'NewsController@news')->middleware('auth');
Route::post('news/submit', 'NewsController@news_submit');
Route::get('news/details/view', 'NewsController@news_approve');
Route::get('news/details/top/news/{id}', 'NewsController@news_top');
Route::get('news/details/breaking/news/{id}', 'NewsController@news_breaking');
Route::get('sme/all/blog/news', 'NewsController@blog_post');


Route::get('news/details/news/approve/{id}', 'NewsController@news_approve_done');
Route::get('news/details/news/pending/{id}', 'NewsController@news_pending_done');

Route::get('news/details/news/arcive/{id}', 'NewsController@news_archive_done');
Route::get('news/details/news/unarcive/{id}', 'NewsController@news_unarcive_done');


Route::get('news/details/news/delete/{id}', 'NewsController@news_delete');
Route::get('sme/archive', 'NewsController@news_archive');
Route::get('contact', 'NewsController@contact_create');
Route::get('new/news/view', 'NewsController@new_news');
Route::get('new/news/edit/{id}', 'NewsController@new_news_edit');
Route::get('/new/news/delete/{id}', 'NewsController@new_news_delete');
Route::post('news/update', 'NewsController@new_news_update');


Route::post('/newsletter/post', 'NewsController@store');



Route::post ('/user/register', 'LoginController@register');


Route::get('sme/loan/process', 'LoanController@form')->middleware('auth');
Route::get('apply/for/loan', 'LoanController@form')->middleware('auth');

Route::get('list/loan/request', 'LoanController@loan_request');

Route::get('list/loan/view/{id}', 'LoanController@loan_request_details');
Route::get('list/loan/approve/{id}', 'LoanController@loan_request_approve');
Route::get('list/loan/cancel/{id}', 'LoanController@loan_request_cancel');
Route::get('list/loan/delete/{id}', 'LoanController@loan_request_delete');

Route::post('loan/aplication/form/submit', 'LoanController@create');

Route::get('/catagory/{id}', 'HomeController@catagory');

Route::get('/tours_travels', 'HomeController@tours_travels');

Route::post('/search', 'HomeController@search');

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
