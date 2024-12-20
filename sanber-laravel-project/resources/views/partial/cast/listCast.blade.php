@extends('layout.home')
@section('judul')
    List Cast
@endsection
@section('content')
    <div class="container">
        <h1>List of Casts</h1>
        <a href="{{ route('cast.create') }}" class="btn btn-primary">Add New Cast</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Bio</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($casts as $cast)
                    <tr>
                        <td>{{ $cast->name }}</td>
                        <td>{{ $cast->age }}</td>
                        <td>{{ $cast->bio }}</td>
                        <td>
                            <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
