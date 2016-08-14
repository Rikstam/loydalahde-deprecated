@extends('admin/admin')

@section('content')
    <div class="col-md-10">
        <h1>Sivut</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Otsikko</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pages as $k => $page)
                <tr>
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $page->title }}</td>
                    <td><a href="/admin/pages/{{$page->id}}/edit" class="btn btn-primary"><i
                                    class="fa fa-pencil-square-o"></i>Muokkaa</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
