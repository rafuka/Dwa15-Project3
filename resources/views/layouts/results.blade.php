@extends('layouts.master')

@section('body')
  <section id="results">
    @yield('results')
  </section>
@stop

@section('footernav')
  <a href="/"><i class="fa fa-home fa-2x"></i>&nbsp;Go back to the Homepage!</a>
@stop
