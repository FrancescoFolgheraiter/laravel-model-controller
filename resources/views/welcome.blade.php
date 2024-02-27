@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="text-center m-5">
    Movie
</h1>
<section>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)     
            <div class="col-3 mb-5">
                <a href="{{ route('movie.show', ['id' => $movie->id])}}" class=" nav-underline ">
                    <div class="card text-center ">
                        <div class="card-body mycard d-flex flex-column justify-content-around ">
                            <h5 class="card-title ">{{ $movie['title'] }}</h5>
                            <p class="card-text">
                                {{ "Data: ".$movie['date']." vote: ".$movie['vote'] }}
                                <br>
                                {{ $movie['original_title'] }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
