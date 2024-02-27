@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
<h1 class="text-center m-5">
    {{ $movie->title }}
</h1>
<section>
    <div class="container">
    
                
            
        <div class="card text-center w-100">
            <div class="card-body mycard d-flex flex-column justify-content-around ">
                <h5 class="card-title ">{{ $movie->title }}</h5>
                <p class="card-text">
                    {{ "Data: ".$movie->date." vote: ".$movie->vote }}
                    <br>
                    {{ $movie->original_title }}
                </p>
            </div>
             
        
        </div>
    </div>
</section>
@endsection
