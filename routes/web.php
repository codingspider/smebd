<?php

Route::get('/', 'HomeController@index');

Route::get('sme/bankers/news/details/{id}', 'DetailsController@bankers_news');
Route::get('sme/fashion/news/details/{id}', 'DetailsController@fashon_news');
Route::get('sme/miscelleneous/news/details/{id}', 'DetailsController@miscelleneous_news');
Route::get('sme/technology/news/details/{id}', 'DetailsController@technology_news');
Route::get('sme/blog/news/details/{id}', 'DetailsController@blog_news');
