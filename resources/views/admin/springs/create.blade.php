@extends('admin/admin')

    @section('content')

        <div class="row">
            <aside class="col-md-3">
                <h2>Admin sidebar #1</h2>
            </aside>
            <div class="col-md-6">
            <h1>Lisää uusi lähde</h1>


                    <form method="POST" action="/admin/springs" class="form-horizontal">


                    </form>
                {!! Form::open(['url' => 'admin/springs','class' => 'form-horizontal']) !!}

                    @include('admin.springs.partials.form',['submitButtonText' => 'Lisää lähde'])

                {!! Form::close() !!}


                @include ('errors.list')

            </div>

            <aside class="col-md-3">
                <h2>Admin sidebar #2</h2>

            </aside>

        </div>

    @endsection
