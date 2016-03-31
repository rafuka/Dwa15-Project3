<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::get('/', 'MainController@getIndex');

  Route::get('/gentext', function() {
    return redirect('/');
  });

  Route::post('/gentext', 'TextController@postText');

  Route::get('/genuser', function() {
    return redirect('/');
  });

  Route::post('/genuser', 'UserController@postUser');

  Route::get('/colorgen', function() {
    $xmldata = file_get_contents("http://www.colourlovers.com/api/palettes/random");
    $xml = simplexml_load_string($xmldata);

    $colors = $xml->palette->colors->hex;

    return json_encode($colors);
  });


  // Restricted routes for local environment
  if (App::environment('local')) {

    Route::get('/test', function() {

      return ('TESTING ROUTE');

    });
  }

});
