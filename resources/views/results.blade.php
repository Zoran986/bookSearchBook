@extends('layouts.app')

@section('content')
 


    <h1>Search Results</h1>

    <ul>
        @foreach ($books as $book)
            <li>
               
                <a href="{{ route('details', $book['id']) }}">{{ $book['volumeInfo']['title'] }}</a> by {{ isset($book['volumeInfo']['authors']) ? $book['volumeInfo']['authors'][0] : 'Unknown' }}


            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}" class="btn btn-primary book-link">Go to home page</a>
@endsection
