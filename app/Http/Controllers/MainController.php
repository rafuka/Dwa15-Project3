<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class MainController extends Controller {

  /* Responds to GET request on homesite */
  public function getIndex() {
    $view = '<h1>this is the home page!</h1>';

    $view .= '<form method="POST" action="/gentext">';
    $view .= csrf_field();
    $view .= 'Number of paragraphs:
                <input type="number" name="nump"/>
                <button type="submit">Go</button>
              </form>';

    $view .= '<form method="POST" action="/genuser">';
    $view .= csrf_field();
    $view .= 'Number of users:
                <input type="number" name="numu" default="0"/>
                <button type="submit">Go</button>
              </form>';

    return $view;
  }

  public function postText() {
    $view = 'NUMBER OF PARAGRAPHS: ' . $_POST['nump'];
    $view .= '<br><a href="/">Back Home</a>';

    return $view;

  }

  public function postUser() {
    $view = 'NUMBER OF USERS: ' . $_POST['numu'];
    $view .= '<br><a href="/">Back Home</a>';

    return $view;
  }
}

?>
