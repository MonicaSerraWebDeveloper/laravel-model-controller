@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row d-flex">
            @foreach ($movies as $movie)
                <div class="col-3 my-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Original Title: {{ $movie->original_title }}</h6>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>
@endsection