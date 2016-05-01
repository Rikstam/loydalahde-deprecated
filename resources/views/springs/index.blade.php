@extends('app')
@section('content')
    <div class="container springs-list">

        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <header>
                    @if (isset($searchTerm))
                        <h1>Hakutulokset: {{$searchTerm}}</h1>
                    @else
                        <h1>Lähteet</h1>
                    @endif
                </header>
                @foreach ($springs as $spring)
                    <div class="row">
                        <article class="spring col-xs-12">
                            <div class="row">

                                <header class="col-xs-12">
                                    <h2>{{ $spring->title }}</h2>
                                    <h3>Muut nimet: {{ $spring->alias }}</h3>
                                </header>

                                <div class="spring-short-description col-xs-6">

                                    <p>{{ $spring->short_description }}</p>

                                </div>

                                <div class="col-xs-6"><br>
                                    <a href="/lahteet/{{ $spring->slug }}" class="btn btn-primary">Lue lisää <i
                                                class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <div class="col-xs-12">
                            <hr>
                        </div>
                    </div>
                @endforeach
            </div>

                <div class="col-xs-12">
                    {!! $springs->links() !!}
                </div>
        </div>
    </div>
@endsection