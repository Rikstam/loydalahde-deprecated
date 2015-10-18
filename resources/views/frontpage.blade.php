@extends('app')

    @section('content')

        <div id="top-banner">

            <div class="container">

            <div id="call-to-action">

                <div class="slogan">
                    <h1>Koska kaikilla on oikeus puhtaaseen veteen</h1>
                </div>

            </div>

            <div class="row">

            <section id="searchBox" class="col-md-6 col-md-offset-3">
                <h2>Haku</h2>
                <form method="POST" action="/hakutulokset">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="prependedInput form-group">
                        <input type="text" class="searchField" id="search" name="search">
                        <button  class="btn btn-primary prepended" type="submit">HAE</button>
                    </div>

                </form>
            </section>

            </div>

            </div>
        </div>

        <div class="container">
            <h1 id="mission-statement">Löydä lähde lähialueeltasi ja auta pitämään lähdevesi yhteisessä omistuksessa.</h1>

        <hr>
        
        <div class="row">
            
            <div class="col-sm-6 col-md-3">

                <img src="http://lorempixel.com/480/480/" alt="" class="img-responsive">
                
            </div>

            <div class="col-sm-6 col-md-3">

                <img src="http://lorempixel.com/480/480/" alt="" class="img-responsive">

            </div>

            <div class="col-sm-6 col-md-3">

                <img src="http://lorempixel.com/480/480/" alt="" class="img-responsive">

            </div>

            <div class="col-sm-6 col-md-3">

                <img src="http://lorempixel.com/480/480/" alt="" class="img-responsive">

            </div>
            
        </div>
        <hr>

        <div class="row">


            <div class="col-md-9">
                <h2>Ajankohtaista</h2>
                <article>
                <h3>Otsikko</h3>
                    <small>10.11.1981</small>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore officiis perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas! Facilis magni nihil tenetur. Est, mollitia, voluptate?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore officiis perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas! Facilis magni nihil tenetur. Est, mollitia, voluptate?</p>
                    <hr>

                </article>

                <article>
                    <h3>Otsikko</h3>
                    <small>10.11.1981</small>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore officiis perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas! Facilis magni nihil tenetur. Est, mollitia, voluptate?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore officiis perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas! Facilis magni nihil tenetur. Est, mollitia, voluptate?</p>
                    <hr>

                </article>


                <article>
                    <h3>Otsikko</h3>
                    <small>10.11.1981</small>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore officiis perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas! Facilis magni nihil tenetur. Est, mollitia, voluptate?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex exercitationem inventore officiis perferendis. Adipisci aspernatur at doloremque dolores esse ipsa libero nemo voluptas! Facilis magni nihil tenetur. Est, mollitia, voluptate?</p>

                    <hr>

                </article>

            </div>

            <div class="col-md-3">
                <h2>Uusimmat päivitykset</h2>
            </div>

            <div class="col-md-3">
                <h2>Suosituimmat lähteet</h2>
            </div>

            <div class="col-md-3">
                <h2>Aktiviisimmat lähderyhmät</h2>
            </div>

        </div>


        <div class="row">
            <section id="map" class="col-md-8 col-md-offset-2">
                <h2>Kaikki lähteet kartalla</h2>
                <div ng-controller="MarkerController">
                    <leaflet id="main-map" markers="markers" legend="legend" center="finlandCenter" width="100%" height="580px"></leaflet>
                </div>
            </section>
        </div>

        </div>
    @endsection