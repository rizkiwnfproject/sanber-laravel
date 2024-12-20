@extends('layout.home')
@section('judul')
    Show Cast
@endsection
@section('content')
    <div class="container">
        <h1>Cast Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $cast->name }}</h5>
                <p class="card-text"><strong>Age:</strong> {{ $cast->age }}</p>
                <p class="card-text"><strong>Bio:</strong> {{ $cast->bio }}</p>
            </div>
        </div>
        <a href="{{ route('cast.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
