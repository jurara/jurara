<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [
    "uses" => "HomeController@homeView",
    "as" => "home"
]);

Route::get('/about', [
    "uses" => "AboutController@aboutView",
    "as" => "about"
]);

Route::get('/blog', [
    "uses" => "BlogController@blogView",
    "as" => "blog"
]);

Route::get('/causes', [
    "uses" => "CausesController@causesView",
    "as" => "causes"
]);

Route::get('/contact', [
    "uses" => "ContactController@contactView",
    "as" => "contact"
]);

Route::get('/volunteer', [
    "uses" => "VolunteerController@volunteerView",
    "as" => "volunteer"
]);

Route::get('/us', [
    "uses" => "HomeController@homeUsView",
    "as" => "home_us"
]);


Route::get('/us/about', [
    "uses" => "AboutController@aboutUsView",
    "as" => "about_us"
]);

Route::get('/us/blog', [
    "uses" => "BlogController@blogUsView",
    "as" => "blog_us"
]);

Route::get('/us/causes', [
    "uses" => "CausesController@causesUsView",
    "as" => "causes_us"
]);

Route::get('/us/contact', [
    "uses" => "ContactController@contactUsView",
    "as" => "contact_us"
]);

Route::get('/us/volunteer', [
    "uses" => "VolunteerController@volunteerUsView",
    "as" => "volunteer_us"
]);


