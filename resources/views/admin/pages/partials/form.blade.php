<div class="form-group">
    {!! Form::label('title', 'Otsikko:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title'] ) !!}
    </div>

</div>

<div class="form-group">
    {!! Form::label('slug', 'Url-teksti:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'] ) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('meta_description', 'Meta kuvaus:', ['class' => 'col-sm-2 control-label']) !!}

    <div class="col-sm-10">
        {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'id' => 'meta-description', 'rows' => '5'] ) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('content', 'Leipäteksti:', ['class' => 'col-sm-2 control-label']) !!}

    <div class="col-sm-10">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content'] ) !!}

    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-primary" onclick="history.back(-1)">Takaisin</button>
    </div>
    <div class="col-sm-2">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </div>
</div>