@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row d-flex">
            @foreach ($movies as $movie)
                <div class="col-3 my-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Original Title</h6>
                            <p class="card-text">Voto: [voto]</p>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>
@endsection