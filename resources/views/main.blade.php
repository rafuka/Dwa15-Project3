@extends('layouts.master')

@section('header')
  <header>
    <h1>Developer's Best Friend</h1>
    <p>Generate Random Data to use while you develop your projects!</p>
  </header>
@stop


@section('body')
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="wrapper">
          <h2>Text Generator</h2>
          <p>Generate all the text you need. (Max: 150 Paragraphs)</p>
          <form method="POST" action="/gentext">
            {{ csrf_field() }}
            <label for="nump">Number of paragraphs:</label>
            <input id="nump" type="number" name="nump"><br>
            <button class="btn btn-primary btn-lg" type="submit">Gimme some text!</button>
            <div class="error">
              {{ $errors->first('nump') }}
            </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="wrapper">
          <h2>User Generator</h2>
          <p>Generate some Users to play With. (Max: 30 Users)</p>
          <form method="POST" action="/genuser">
            {{ csrf_field() }}
            <label for="numu">Number of users:</label>
            <input id="numu" type="number" name="numu">
            <br>
            <fieldset>
              <legend>Optional Fields:</legend>
              <label for="address">Address</label>
              <input id="address" type="checkbox" name="address" value="set"><br>
              <label for="phone">Phone Number</label>
              <input id="phone" type="checkbox" name="phone" value="set"><br>
              <label for="company">Company</label>
              <input id="company" type="checkbox" name="company" value="set"><br>
              <label for="email">E-mail</label>
              <input id="email" type="checkbox" name="email" value="set">
            </fieldset>
            <button class="btn btn-primary btn-lg" type="submit">Gimme some users!</button>

            <div class="error">
              {{ $errors->first('numu') }}
            </div>
          </form>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="wrapper">
          <h2>Random Color Palette</h2>
          <div id="colors-wrapper">
            @foreach($colors as $color)
              <div style="background-color: #<?php echo $color ?>" class="color">
                <p>#{{ $color }}</p>
              </div>
            @endforeach

          </div>
          <form id="color-form" method="GET" action="/">
            <button id="color-btn" class="btn btn-primary btn-lg" type="submit">Gimme some color!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop

@section('scripts')
  <script src="js/ajaxcolor.js">
  </script>
@stop
