@extends('admin/admin')

@section('content')

    <div class="row">
        <aside class="col-md-3">
            <h2>Admin sidebar #1</h2>
        </aside>
        <div class="col-md-6">
            <h1>Muokkaa lähdettä</h1>
            <h2>{{ $spring->title }}</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Luotu</th>
                    <th>Viimeksi muokattu</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>{{ $spring->created_at }}
                    <td>{{ $spring->updated_at }}</td>
                </tr>
                </tbody>

            </table>

            {!! Form::model($spring,['method' => 'PATCH','route' =>['admin.springs.update', $spring->id], 'class' => 'form-horizontal']) !!}

            @include('admin.springs.partials.form',['submitButtonText' => 'Tallenna'])

            {!! Form::close() !!}

        @include ('errors.list')

        </div>

        <aside class="col-md-3">
            <h2>Admin sidebar #2</h2>

        </aside>

    </div>

@endsection
