@extends('layouts.master')

@section('title', 'Cars')

@section('content')
    <h2>Cars</h2>
      <ul class="list-group list-group-flush">
        @foreach ( $cars as $car )
          <li>
            <a href="{{ route('car', ['id'=>$car->id]) }}">
              {{ $car->title }}
            </a>
          </li>
        @endforeach
      </ul>
@endsection