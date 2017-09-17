@extends('app')
@section('content')
    <div id="top-banner">
        <div class="container">
            <div id="call-to-action">
                <a name="haku"></a>
                <div class="slogan">
                    <h1>{{$page->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <article class="page col-xs-12 col-md-8 col-md-offset-2">
              
                <hr>
                {!! $page->content !!}


            </article>

        </div>
    </div>

@endsection
