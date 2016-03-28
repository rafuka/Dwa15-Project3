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

  });

  Route::post('/gentext', 'TextController@postText');


  Route::get('/genuser', function() {

  });

  Route::post('/genuser', 'UserController@postUser');





  Route::get('/test', function() {
    $xmldata = file_get_contents("http://www.colourlovers.com/api/palettes/random");
    $xml = simplexml_load_string($xmldata);
    print_r($xml);
    print_r($xml->palette->colors->hex[0]);
    print_r($xml->palette->colors->hex[1]);
    print_r($xml->palette->colors->hex[2]);
    echo '<br>';
    echo '<br>';
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(5);
    echo implode ('<p>', $paragraphs );
    echo '<br>';
    echo '<br>';
    return ('TESTING ROUTE');
  });

});
