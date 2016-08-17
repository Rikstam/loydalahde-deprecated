@extends('admin/admin')

@section('content')

        <div class="col-md-8">
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

            {!! Form::model($spring,['method' => 'PATCH','route' =>['admin.springs.update', $spring->id], 'files' => true, 'class' => 'form-horizontal']) !!}

            @include('admin.springs.partials.form',['submitButtonText' => 'Tallenna'])

            {!! Form::close() !!}

        @include ('errors.list')

        </div>

@endsection
