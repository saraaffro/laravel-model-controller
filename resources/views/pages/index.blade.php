@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header">{{ $movie->title }}</h1>
                        <div class="card-body">
                            <p>{{ $movie->nationality }}</p>
                            <p>Year: {{ $movie->date }}</p>
                            <p>Vote: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
