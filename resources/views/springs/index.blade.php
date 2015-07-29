@extends('app')
    @section('content')
        @foreach ($springs as $spring)

            <article>
                <h2>{{ $spring->title }}</h2>
                <h3>{{ $spring->alias }}</h3>
                <p>{{ $spring->description }}</p>
                <img src="{{ $spring->image }}" alt="">
            </article>

        @endforeach
    @endsection