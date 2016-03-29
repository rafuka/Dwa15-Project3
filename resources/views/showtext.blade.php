@extends('layouts.results')

@section('title')
  Random Text | Project 3
@stop

@section('results')
  @foreach($paragraphs as $p)
    <p>{{ $p }}</p>
  @endforeach
@stop
