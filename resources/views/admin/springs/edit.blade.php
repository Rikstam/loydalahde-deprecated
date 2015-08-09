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



            {!!  Form::model($spring,['route' =>['admin.springs.update', $spring->id], 'class' => 'form-horizontal']) !!}

                <div class="form-group">

                    {!! Form::label('title', 'Title:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title'] ) !!}
                    </div>

                </div>

                <div class="form-group">
                    {!! Form::label('alias', 'Alias:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('alias', null, ['class' => 'form-control', 'id' => 'alias'] ) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('status','Status',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">

                        {!! Form::select('status',
                        ['juomakelpoista' => 'Juomakelpoista',
                        'ei tietoa' => 'Ei tietoa',
                        'ei juomakelpoista' => 'Ei juomakelpoista'],
                        null,
                        ['class' => 'form-control', 'id' => 'status'])
                        !!}

                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('tested_at','Tested',['class' => 'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::date('tested_at', null, ['class' => 'form-control', 'id' => 'tested_at']) !!}
                    </div>
                </div>



                <div class="form-group">

                    {!! Form::label('description', 'Description:', ['class' => 'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">


                        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description'] ) !!}

                    </div>
                </div>

                <div class="form-group">
                    <label for="short_description" class="col-sm-2 control-label">Short Description</label>
                    <div class="col-sm-10">
                                <textarea name="short_description" rows="5" class="form-control" id="short_description">

                                </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="latitude" class="col-sm-2 control-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" name="latitude" class="form-control" id="latitude" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="longitude" class="col-sm-2 control-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" name="longitude" class="form-control" id="longitude" >
                    </div>
                </div>

                <div class="form-group">


                    <label for="visibility" class="col-sm-2 control-label">
                        Näkyvissä?
                    </label>
                    <div class="col-sm-2">
                        <input id="visibility" name="visibility" type="checkbox" value="true" checked>
                    </div>


                </div>


                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-2">
                        <button type="submit" class="btn btn-primary" onclick="history.back(-1)">Takaisin</button>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-default">Tallenna</button>
                    </div>


                </div>


        {!!Form::close() !!}

        </div>

        <aside class="col-md-3">
            <h2>Admin sidebar #2</h2>

        </aside>

    </div>

@endsection
