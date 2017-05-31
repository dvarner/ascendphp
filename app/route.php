<?php namespace Ascend;

// use Ascend\BootStrap as BS;
use Ascend\Route as Route;
use Ascend\Feature\Session;

// Required....
Route::maint();
Route::lock();
Route::denied(); // uri = /access-denied

////////////////////////////////////////////////////////////////
// All Default below; all can be removed except error404()
////////////////////////////////////////////////////////////////

Route::view('/', 'docs/index');

require_once 'route-examples.php';

////////////////////////////////////////////////////////////////
// DO NOT REMOVE BELOW
////////////////////////////////////////////////////////////////

Route::error404();
