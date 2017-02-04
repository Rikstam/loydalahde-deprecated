@extends('app')
@section('content')

    @include('partials/_top-banner')
    <div class="container">
        <div class="row">
            <article class="single-spring col-xs-12 col-md-8 col-md-offset-2">
                <header>
                    <h1>{{ $spring->title }}</h1>
                    <h2>{{ $spring->alias }}</h2>

                    <hr>
                </header>
{{--
                @if ($spring->image)
                    <img src="{{ url('/')}}/storage/{{ $spring->image }}" alt="{{ $spring->title }}"
                         class="img-responsive">
                @endif
--}}
                {!! $spring->description !!}
{{--
                @if ($spring->images)
                    <section class="gallery row">
                        <div class="col-xs-12">
                            <h3>Kuvia lähteestä</h3>
                        </div>
                        @foreach($spring->images as $image)
                            <div class="col-xs-12 col-sm-6">
                                <a href="#" class="thumbnail">
                                    <img src="{{ $image->path }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </section>
                @endif --}}
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
                                 defaults="defaults"
                                 width="100%"
                                 height="580px">

                        </leaflet>
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection