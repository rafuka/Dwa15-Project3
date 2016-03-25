<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class UserController extends Controller {

  public function postUser() {
    $view = 'NUMBER OF USERS: ' . $_POST['numu'];
    $view .= '<br><a href="/">Back Home</a>';

    return $view;
  }
}
 ?>
