@extends('admin/admin')

@section('content')
    <div class="col-md-8">
        <h1>Muokkaa sivua</h1>
        <h2>{{ $page->title }}</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Luotu</th>
                <th>Viimeksi muokattu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $page->created_at }}
                <td>{{ $page->updated_at }}</td>
            </tr>
            </tbody>

        </table>

        {!! Form::model($page,['method' => 'PATCH','route' =>['admin.pages.update', $page->id], 'class' => 'form-horizontal']) !!}

        @include('admin.pages.partials.form',['submitButtonText' => 'Tallenna sivu'])

        {!! Form::close() !!}


        @include ('errors.list')

    </div>

@endsection