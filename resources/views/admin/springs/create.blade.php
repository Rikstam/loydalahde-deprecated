@extends('admin/admin')

    @section('content')

            <div class="col-md-6">
            <h1>Lisää uusi lähde</h1>


                    <form method="POST" action="/admin/springs" class="form-horizontal">


                    </form>
                {!! Form::open(['url' => 'admin/springs','files' => true,'class' => 'form-horizontal']) !!}

                    @include('admin.springs.partials.form',['submitButtonText' => 'Lisää lähde'])

                {!! Form::close() !!}


                @include ('errors.list')

            </div>

    @endsection
