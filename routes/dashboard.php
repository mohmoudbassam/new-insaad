<?php

Route::get("/", "HomeController")->name("dashboard.index");
Route::get("/inbox", ["uses" => "MessagesController@index", "as" => "messages.index"]);
Route::get("/inbox/{message}", ["uses" => "MessagesController@show", "messages.show"]);
Route::delete("/inbox/{message}", ["uses" => "MessagesController@destroy", "as" => "messages.destroy"]);
Route::post("/inbox", ["uses" => "MessagesController@store", "as" => "messages.store"]);
Route::get("/messages/create", ["uses" => "MessagesController@create", "as" => "messages.create"]);
Route::get("settings", ["uses" => "SettingsController@show", "as" => "settings.show"]);
Route::put("settings", ["uses" => "SettingsController@update", "as" => "settings.update"]);

// Applications
Route::get('applications','ApplicationController@index')->name('applications.index');
Route::get('applications/{application}','ApplicationController@show')->name('applications.show');

Route::resource("services", "ServiceController");
Route::put("services-image", "ServiceController@updateServiceImage")->name('services.image.update');

Route::resource("roles", "RolesController")->except('destroy');

Route::get("partners/{type}", "PartnersController@index")->name('partners.index');
Route::get("partners/{type}/create", "PartnersController@create")->name('partners.create');
Route::resource("partners", "PartnersController")->except(['index','create']);

Route::resource("users", "UsersController");

Route::resource("sliders", "SlidersController");

Route::resource("counts", "CountController");

//Route::post('ckeditor/upload', 'HomeController@upload')->name('ckeditor.upload');
Route::post('ckeditor/upload', 'HomeController@ckeditorUpload')->name('ckeditor.upload');

//Policies
Route::get('policies','PoliciesController@edit')->name('policies');
Route::post('update-policies','PoliciesController@update')->name('policies.update');

//faq
Route::resource("faqs", "FaqController");

//AboutUs
Route::get('aboutUs','AboutUsController@edit')->name('aboutUs');
Route::post('update-aboutUs','AboutUsController@update')->name('aboutUs.update');
Route::put("about-us-image", "AboutUsController@updateAboutUsImage")->name('aboutUs.image.update');

Route::put("home-image", "SettingsController@homeImage")->name('home.image.update');

//news_letter
Route::get('news-letters','NewsLetterController@index')->name('newsLetter.index');
