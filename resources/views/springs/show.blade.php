@extends('app')
    @section('content')
    <div class="container">
        <div class="row">
            <article class="col-md-9">
                <h1>{{ $spring->title }}</h1>
                <h2>{{ $spring->alias }}</h2>
                    <hr>

                <div class="row">
                    <div class="col-md-3"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2363.4749533374193!2d23.765693599999672!3d61.50326810596131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468ed8aa1d76717f%3A0xd170b37dbf59335c!2sJuhlatalonkatu+2%2C+33100+Tampere!5e1!3m2!1sfi!2sfi!4v1438457051314" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe></div>

                    <div class="col-md-6">
                    {!! $spring->description !!}
                    </div>

                    <div class="col-md-3">
                        <img src="{{ url('/')}}/img/{{ $spring->image }}" alt="" class="img-responsive">
                    </div>

                </div>
            </article>
        </div>


    </div>

    @endsection