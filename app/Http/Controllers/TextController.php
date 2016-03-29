<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;

class TextController extends Controller {

  public function postText(Request $req) {

    $this->validate($req, [
      'nump' => 'required|integer|min:1|max:150'
    ]);

    $textgen = new Generator();
    $paragraphs = $textgen->getParagraphs($req->input('nump'));

    return view('showtext')->with('paragraphs', $paragraphs);
  }
}
