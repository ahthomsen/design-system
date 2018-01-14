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

Route::get('/', function () {

	$dir = base_path('resources/views/pages');

	$test = array_filter(scandir($dir), function($var) {

		if (strpos($var, 'blade.php')) return true;

	});

	$views = array_map (function($input) {

		return substr($input, 0, strlen($input) - 10);

	}, $test);

    return view('index', compact('views'));
});
