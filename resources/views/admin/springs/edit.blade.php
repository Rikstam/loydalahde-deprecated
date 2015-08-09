@extends('admin/admin')

@section('content')

    <div class="row">
        <aside class="col-md-3">
            <h2>Admin sidebar #1</h2>
        </aside>
        <div class="col-md-6">
            <h1>Muokkaa lähdettä</h1>
            <h2>{{ $spring->title }}</h2>


            {!!  Form::model($spring,['route' =>'spring.edit', $spring->id]) !!}



                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="alias" class="form-control" id="alias" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control" id="status" >
                            <option value="juomakelpoista">Juomakelpoista</option>
                            <option value="ei tietoa">Ei tietoa</option>

                            <option value="ei juomakelpoista">Ei juomakelpoista</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tested_at" class="col-sm-2 control-label">Tested</label>
                    <div class="col-sm-10">
                        <input type="date" name="tested_at" class="form-control" id="tested_at" >
                    </div>
                </div>



                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                                <textarea name="description" rows="20" class="form-control" id="description">

                                </textarea>
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
