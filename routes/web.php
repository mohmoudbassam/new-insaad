<?php

use App\Models\AboutUs;
use App\Models\Count;
use App\Models\Partner;
use App\Models\Service;
use App\Models\User;
use Database\Seeders\permissions\AllPermissions;
use Illuminate\Support\Str;

Route::get('new_admin', function () {
//    User::query()->where('email','marketing@isnaad.sa')->delete();
//    User::query()->where('email','admin@isnad.com')->delete();
//    $role=  AllPermissions::Permissions;
//    $admin = User::create([
//        'first_name' => 'admin',
//        'email' => 'marketing@isnaad.sa',
//        'role' => 'admin',
//        'email_verified_at' => now(),
//        'password' => bcrypt('Is#1122ma'), // 123456
//        'remember_token' => Str::random(10),
//    ]);
//    $admin->assignRole('admin');
});
Auth::routes(['verify' => true]);

Route::get("language/{locale}/switch", "Website\LocalizationController")->name("language.switch");

Route::get("/", function () {
    session()->replace(['locale' => app()->getLocale()]);

    return redirect("/" . app()->getLocale());

});
Route::get('sitemap.xml', 'Website\SitemapController@index');

Route::get('home.html', function () {
    return Redirect::to('/', 301);
});

Route::group(["prefix" => "{lang}", "middleware" => ["localize", "HtmlMinifier"], "namespace" => "Website"],
    function () {

        //home
        Route::get("/", ["uses" => "HomeController@index", "as" => "website.index"]);
        Route::get("/search", ["uses" => "HomeController@search", "as" => "website.search"]);

        Route::get("/about-us", ["uses" => "AboutController", "as" => "website.about"]);
        Route::get("/faqs", ["uses" => "FaqController", "as" => "website.faqs"]);
        Route::get("/gallery", ["uses" => "GalleryController@index", "as" => "website.gallery"]);
        Route::get("/contact-us", ["uses" => "MessagesController@index", "as" => "website.contact_us"]);
        Route::post("/contact-us", ["uses" => "MessagesController@store", "as" => "website.contact_us.store"]);


        //services
        Route::get("/services", ["uses" => "ServicesController@index", "as" => "website.services.index"]);
        Route::get("/services/{slug}", ["uses" => "ServicesController@show", "as" => "website.services.show"]);


        //application status
        Route::get('/application','ApplicationController@index')->name('application.index');
        Route::post('/applications','ApplicationController@store')->name('application.store');

        //profile
        Route::get("/agent-applications",
            ["uses" => "ApplicationController@agentApplications", "as" => "agent-applications"])->middleware('auth');

        Route::get("/edit-profile", ["uses" => "UserController@edit", "as" => "website.user.edit"])->middleware('auth');
        Route::post("/profile/update/{user}",
            ["uses" => "UserController@update", "as" => "website.user.update"])->middleware('auth');


        // Register training
        Route::get('training-register','ApplicationController@showTrainingForm')->name('training.register');
        Route::post('training-register','ApplicationController@storeTraining')->name('training.register.post');
        // Services Applications
        Route::get('service-application','ApplicationController@showServiceForm')->name('website.service.form');
        Route::post('store-service-application','ApplicationController@storeService')->name('website.service.store');

        //News Letter
        Route::post('news-letter', 'NewsLetterController@store')->name('website.newsLetter');


        //policies
        Route::get('refund', 'PoliciesController@refund')->name('website.refund');
        Route::get('privacy', 'PoliciesController@privacy')->name('website.privacy');
        Route::get('usage', 'PoliciesController@usage')->name('website.usage');
        Route::get('agreement', 'PoliciesController@agreement')->name('website.agreement');



});



