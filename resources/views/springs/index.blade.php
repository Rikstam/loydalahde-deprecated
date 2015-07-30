@extends('app')
    @section('content')
        <h1>Lähteet</h1>
        <div class="row">
        @foreach ($springs as $spring)

            <article class="spring col-md-4 col-lg-3">
                <header>
                    <h2>{{ $spring->title }}</h2>
                    <h3>{{ $spring->alias }}</h3>
                </header>


                <section class="">

                <img src="{{ $spring->image }}" alt="" class="img-responsive">
                    <p>{{ $spring->description }}</p>
                </section>
            </article>


        @endforeach
        </div>
    @endsection