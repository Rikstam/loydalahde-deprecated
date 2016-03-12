@extends('admin/admin')

@section('content')
    <div class="col-md-10">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Hallintapaneeli</h1>
                <h2>Moi {{$user->name}}</h2>
            </div>

            <div class="panel-body">
                Your Application's Landing Page.
            </div>
        </div>


    </div>
@endsection
