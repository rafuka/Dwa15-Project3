<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class TextController extends Controller {

  public function postText() {
    $view = 'NUMBER OF PARAGRAPHS: ' . $_POST['nump'];
    $view .= '<br><a href="/">Back Home</a>';

    return $view;
  }
}
