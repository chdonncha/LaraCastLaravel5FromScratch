<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    echo 'hello laravel';
});

Route::get('hello/{name}', function($id) {
    echo 'hello ' . $id;
});

Route::post('test', function(){
    
});

Route::get('test', function(){
    echo '<form action="test" method="POST">';
    echo '<input type="submit">';
    // Send csrf token through, if it's not sent then an error will be thrown
    echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
    echo '<input type="hidden" name="_method" value="DELETE">';
    echo '</form>';
});

Route::put('test', function(){
    echo 'We have just updated an item';
});

Route::delete('test', function(){
    echo 'We have just deleted an item';
});