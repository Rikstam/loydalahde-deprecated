@extends('app')

    @section('content')

        <div class="row">
            <div class="col-md-12">
               <h1>Löydä lähde</h1>
            </div>

            <div class="col-md-12">
                <form method="POST" action="/hakutulokset">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search">
                    </div>
                    <button  class="btn btn-default" type="submit">Hae</button>
                </form>
            </div>

            <section id="map" class="col-md-12">

            </section>

        </div>
    @endsection