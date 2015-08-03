@extends('app')
    @section('content')
        <div class="container">
        <h1>Lähteet</h1>
        <div class="row">
        @foreach ($springs as $spring)

            <article class="spring col-md-4 col-lg-3">
                <header>
                    <h2>{{ $spring->title }}</h2>
                    <h3>{{ $spring->alias }}</h3>
                    <p class="bg-info">{{ $spring->status }}</p>

                </header>


                <section class="">

                <img src="{{ url('/')}}/img/{{ $spring->image }}" alt="" class="img-responsive">
                    <p>{{ $spring->location }}</p>
                    <a href="/lahteet/{{ $spring->id }}"><p>{{ $spring->short_description }}</p></a>
                </section>

            </article>


        @endforeach
        </div>
        </div>
    @endsection