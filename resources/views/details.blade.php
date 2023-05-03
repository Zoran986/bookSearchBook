@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Go back</a>
            <h2>{{ $book['volumeInfo']['title'] }}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            @if(isset($book['volumeInfo']['imageLinks']))
                <img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] }}" alt="{{ $book['volumeInfo']['title'] }}" class="img-fluid">
            @else
                <p>No image available</p>
            @endif
        </div>
        <div class="col-md-8">
            <p><strong>Authors:</strong> {{ implode(', ', $book['volumeInfo']['authors']) }}</p>
            @if(isset($book['volumeInfo']['description']))
            <p><strong>Description:</strong> {{ $book['volumeInfo']['description'] }}</p>
            @else
            <p><strong>Description:</strong> No description is available</p>
            @endif
        </div>
    </div>
@endsection
