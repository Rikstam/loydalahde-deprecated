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