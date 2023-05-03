@extends('layouts.app')

@section('content')
    <form action="{{ route('search') }}" method="GET">
        <div class="form-group">
            <label for="query">Search for books:</label>
            <input type="text" name="query" id="query" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    
@endsection

