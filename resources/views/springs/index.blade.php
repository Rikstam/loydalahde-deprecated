@extends('app')
@section('content')
    <div class="container springs-list">
        <header>
            @if (isset($searchTerm))
                <h1>Hakutulokset: {{$searchTerm}}</h1>
            @else
                <h1>Lähteet</h1>
            @endif
        </header>
        <div class="row">
            <aside class="col-xs-12 col-sm-3">

                <nav class="results-filter">
                    <ul>
                        <li><a href="/lahteet">Kaikki</a></li>
                        <li><a href="/lahteet/juomakelpoiset">Juomakelpoiset</a></li>
                        <li><a href="">Puolen vuoden sisään tutkitut</a></li>
                    </ul>
                </nav>
            </aside>
            <div class="col-xs-12 col-sm-9">
                @foreach ($springs as $spring)
                    <div class="row">
                        <article class="spring col-xs-12">
                            <div class="row">
                                <section class="col-xs-12 col-sm-5">
                                    @if ($spring->image)
                                        <img src="{{ url('/')}}/img/{{ $spring->image }}" alt="" class="img-responsive">
                                    @else
                                        <img src="http://placehold.it/450x250" alt="" class="img-responsive">
                                    @endif

                                    <table class="table table-condensed table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Veden laatu</th>
                                            <th>Viimeksi tutkittu</th>
                                            <th>Koordi&shy;naatit?</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                        <span class="spring-status label
                        @if ($spring->status == 'ei juomakelpoista')
                                                label-danger
                                        @elseif($spring->status == 'juomakelpoista')
                                                label-success
                                        @else
                                                label-warning
                                        @endif
                                                ">{{ $spring->status }}</span>
                                            </td>
                                            <td> @if (isset($spring->tested_at))
                                                    {{ $spring->tested_at }}
                                                @else
                                                    <span class="spring-status label label-warning">
                                                    Ei tietoa
                                                </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($spring->location))
                                                    <span class="spring-status label label-success">
                                                        <i class="fa fa-check-square"></i> Löytyy</span>
                                                @else
                                                    <span class="spring-status label label-danger">
                                                        <i class="fa fa-minus-square"></i> Ei tietoa
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </section>

                                <header class="col-xs-12 col-sm-7">
                                    <h2>{{ $spring->title }}</h2>
                                    <h3>Muut nimet: {{ $spring->alias }}</h3>
                                </header>

                                <div class="spring-short-description col-xs-12 col-sm-7">

                                    <p>{{ $spring->short_description }}</p>
                                    <a href="/lahteet/{{ $spring->id }}" class="btn btn-primary">Lue lisää <i
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