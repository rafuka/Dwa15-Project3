<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller {

  /* Responds to GET request on homesite */
  public function getIndex() {

    $xmldata = file_get_contents("http://www.colourlovers.com/api/palettes/random");
    $xml = simplexml_load_string($xmldata);

    $colors = $xml->palette->colors->hex;


    return view('main')->with('colors', $colors);
  }


}

?>
