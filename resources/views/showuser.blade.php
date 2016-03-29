@extends('layouts.results')

@section('title')
  Random Users | Project 3
@stop

@section('results')
  @foreach($users as $user)
    <div class="user-wrapper">
      <img class="user-img" src="<?php echo $user->imageURL; ?>" alt="User's image"/>
      <p> {{ $user->name }}</p>

      @if(isset($email))
        <p>{{ $user->email }}</p>
      @endif

      @if(isset($address))
        <p>{{ $user->address }}</p>
      @endif

      @if(isset($phone))
        <p>{{ $user->phone }}</p>
      @endif

      @if(isset($company))
        <p>{{ $user->company }}</p>
      @endif
    </div>
  @endforeach
@stop
