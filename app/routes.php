<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/* Static page routes */
Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/faq', function(){
	return View::make('faq');
});

Route::get('/showcase', function()
{
	return View::make('showcase');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/compare', function()
{
	return View::make('compare');
});

Route::get('/pricing', function()
{
	return View::make('pricing');
});

Route::get('/login', function(){
	return View::make('login');
});

Route::get('/user/profile', function(){
	return View::make('/user/profile');
});

Route::get('/user/project', function(){
	return View::make('/user/project');
});