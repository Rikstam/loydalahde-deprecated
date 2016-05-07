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
            @include('partials.searchForm')
        </div>
    </div>

    <div class="container">
        <div class="row">
            <section id="news" class="col-md-8 col-md-offset-2">
                <!--  <h1 id="mission-statement">Löydä lähde lähialueeltasi ja auta pitämään lähdevesi yhteisessä
                    omistuksessa.</h1>
                <hr>

                <h2>Ajankohtaista</h2>
                <article class="row article">
                    <div class="article-image col-xs-12 col-sm-4">
                        <img class="img-responsive" src="https://fillmurray.com/300/300">
                    </div>
                    <div class="article-excerpt col-xs-12 col-sm-8">
                        <header>
                        <h3>Otsikko</h3>
                        <span class="published-date">10.11.1981</span> | <span class="article-writer">Riku Kestilä</span> | <span class="article-category">Ajankohtaista</span>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore
                            officiis
                            perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas!
                            Facilis
                            magni nihil tenetur. Est, mollitia, voluptate?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore
                            officiis
                            perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas!
                            Facilis
                            magni nihil tenetur. Est, mollitia, voluptate?</p>
                        <a href="#" class="read-more">Lue lisää <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </article>

                <hr>


                <article class="row article">
                    <div class="article-image col-xs-12 col-sm-4">
                        <img class="img-responsive" src="https://fillmurray.com/300/300">
                    </div>
                    <div class="article-excerpt col-xs-12 col-sm-8">
                        <header>
                            <h3>Otsikko</h3>
                            <span class="published-date">10.11.1981</span> | <span class="article-writer">Riku Kestilä</span> | <span class="article-category">Ajankohtaista</span>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore
                            officiis
                            perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas!
                            Facilis
                            magni nihil tenetur. Est, mollitia, voluptate?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore
                            officiis
                            perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas!
                            Facilis
                            magni nihil tenetur. Est, mollitia, voluptate?</p>
                        <a href="#" class="read-more">Lue lisää <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </article>

                <div class="row">
                    <div class="col-xs-12">
                        <a href="#">Kaikki uutiset</a>
                    </div>
                </div>
-->
            </section>
        </div>
    </div>
        <div class="container-fluid map-container">
            <div class="row">
                <section class="map col-xs-12">
                    <header>
                        <h2>Lähdetilanne 20.2.2015</h2>
                        <p>Lähdetilanteesta näkyy tällä hetkellä tiedossamme olevat lähteet.</p>
                    </header>

                    <div ng-controller="FrontPageMapController">
                        <leaflet id="main-map" markers="markers" legend="legend" center="finlandCenter" width="100%" defaults="defaults"
                                 height="580px"></leaflet>
                    </div>
                </section>
            </div>

        </div>
@endsection