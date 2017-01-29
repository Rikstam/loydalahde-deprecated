@extends('app')
@section('content')
    @include('partials/_top-banner')

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
                        @include('springs/_spring')
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