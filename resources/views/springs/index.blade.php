@extends('app')
@section('content')

    <div id="top-banner">
        <div class="container">
            <div id="call-to-action">
                <a name="haku"></a>
                <div class="slogan">
                    <h1>Koska kaikilla on oikeus puhtaaseen veteen</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container springs-list">

        <div class="row">
            <div class="col-xs-12">
                <header>
                    @if (isset($searchTerm))
                        <h1>Hakutulokset: {{$searchTerm}}</h1>
                    @else
                        <h1>Lähteet</h1>
                    @endif
                </header>
                <div class="row">
                    @foreach ($springs as $spring)

                        <article class="spring col-xs-12 col-sm-6 col-lg-4">
                            <header>
                                <h2>{{ $spring->title }}</h2>

                                @if($spring->alias)
                                    <h3>Muut nimet: {{ $spring->alias }}</h3>
                                @endif
                                <hr>

                                @if(isset($spring->distance))
                                    <span class="distance">
Etäisyys paikasta {{$searchTerm}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        {{round($spring->distance, 2)}}km</span>
                                @endif
                            </header>
                            <div class="wrap">



                            <div class="spring-short-description">

                                <p>{{ str_limit(strip_tags($spring->short_description), 300)}}</p>
                                <hr>
                                <a href="/lahteet/{{ $spring->slug }}" class="btn btn-primary">Lue lisää <i
                                            class="fa fa-arrow-circle-right"></i>
                                </a>

                            </div>
                            </div>
                        </article>


                    @endforeach
                </div>
            </div>

            <div class="col-xs-12">
                <span class="pagination-totals">{{$springs->currentPage()}}/7</span>
                {!! $springs->links() !!}
            </div>
        </div>
    </div>
@endsection