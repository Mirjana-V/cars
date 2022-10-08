@extends('layouts.master')

@section('title', $car->title)

@section('content')
  <h3>Car title: {{ $car->title }}</h3>
  <p>Car producer: {{ $car->producer }}</p>
  <p>Number of doors: {{ $car->number_of_doors }}</p>
@endsection