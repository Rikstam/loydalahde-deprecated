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
    <div class="container">
        <div class="row">
            <article class="single-spring col-xs-12 col-md-8 col-md-offset-2">
                <h1>{{ $spring->title }}</h1>
                <h2>{{ $spring->alias }}</h2>
                @if ($spring->image)
                    <img src="{{ url('/')}}/storage/{{ $spring->image }}" alt="{{ $spring->title }}" class="img-responsive">
                @else
                    <img src="http://placehold.it/450x250" alt="" class="img-responsive">
                @endif
                <hr>
                {!! $spring->description !!}


            </article>

        </div>
    </div>
    <div class="container-fluid map-container">
        <div class="row">
    <section class="map col-xs-12">
        @if ($spring->latitude && $spring->longitude)
            <div ng-controller="SingleSpringController">
                <leaflet class="single-map"
                         markers="{m1: {lat: {{$spring->latitude}},lng: {{$spring->longitude}}  } }"
                         center="{lat: {{$spring->latitude}}, lng: {{$spring->longitude}}, zoom: 10}"
                         width="100%"
                         height="580px">

                </leaflet>
            </div>
        @endif
    </section>
    </div>
    </div>
@endsection