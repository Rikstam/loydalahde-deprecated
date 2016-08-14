@extends('admin/admin')

@section('content')

    <div class="col-md-8">
        <h1>Lisää Sivu</h1>

        {!! Form::open(['url' => 'admin/pages','class' => 'form-horizontal']) !!}

        @include('admin.pages.partials.form',['submitButtonText' => 'Lisää sivu'])

        {!! Form::close() !!}


        @include ('errors.list')

    </div>

@endsection
