@extends('admin/admin')

    @section('content')

        <div class="row">
            <aside class="col-md-3">
                <h2>Admin sidebar #1</h2>
            </aside>
            <div class="col-md-6">
            <h1>Lisää uusi lähde</h1>


                    <form method="POST" action="/admin/springs" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alias" class="col-sm-2 control-label">Alias</label>
                            <div class="col-sm-10">
                                <input type="text" name="alias" class="form-control" id="alias" >
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
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Julkaise</button>
                            </div>
                        </div>


                    </form>


            </div>

            <aside class="col-md-3">
                <h2>Admin sidebar #2</h2>

            </aside>

        </div>

    @endsection
