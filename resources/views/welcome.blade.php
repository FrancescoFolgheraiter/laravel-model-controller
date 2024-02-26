@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="text-center m-5">
    Laravel model controller
</h1>
<section>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)     
            <div class="col-3 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $movie['title'] }}</h5>
                            <p class="card-text">{{ "Data: ".$movie['date']." vote: ".$movie['vote'] }}
                            </p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
