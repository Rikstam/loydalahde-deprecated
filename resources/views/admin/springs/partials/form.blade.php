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
    {!! Form::label('slug', 'Slug:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'] ) !!}
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
    {!! Form::label('short_description', 'Short Description:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('short_description', null, ['class' => 'form-control', 'id' => 'short_description'] ) !!}
    </div>
</div>

<div class="form-group">

    {!! Form::label('latitude', 'Latitude:', ['class' => 'col-sm-2 control-label']) !!}


    <div class="col-sm-10">
        @if (isset($spring->location))
            {!! Form::text('latitude',$spring->latitude, ['class' => 'form-control', 'id' => 'latitude'] ) !!}
        @else
            {!! Form::text('latitude', null, ['class' => 'form-control', 'id' => 'latitude', 'placeholder'=>'12.3456789'] ) !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('longitude', 'Longitude:', ['class' => 'col-sm-2 control-label']) !!}

    <div class="col-sm-10">
        @if (isset($spring->location))
            {!! Form::text('longitude',$spring->longitude, ['class' => 'form-control', 'id' => 'longitude'] ) !!}
        @else
            {!! Form::text('longitude', null, ['class' => 'form-control', 'id' => 'longitude', 'placeholder'=>'12.3456789'] ) !!}
        @endif
    </div>
</div>

<div class="form-group">
    <label for="visibility" class="col-sm-2 control-label">
        Näkyvissä?
    </label>
    <div class="col-sm-3">
        {!! Form::label('visibility', 'Kyllä:', ['class' => 'control-label']) !!}

        {!! Form::radio('visibility', 'true', ['checked' => 'checked']) !!}

        {!! Form::label('visibility', 'Ei:', ['class' => 'control-label']) !!}

        {!! Form::radio('visibility', 'false') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image','Spring Image:', ['class' => 'col-sm-2 control-label']) !!}
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-primary" onclick="history.back(-1)">Takaisin</button>
    </div>
    <div class="col-sm-2">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </div>
</div>