<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller {

  /* Responds to GET request on homesite */
  public function getIndex() {
    return view('main');
  }

}

?>
