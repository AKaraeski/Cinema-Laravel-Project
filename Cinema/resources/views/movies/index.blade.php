@extends('layouts.master')
@section('content')
{{-- page style --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/movies.css') }}">
@endpush
<section id="movies">
    <h2>Movies</h2>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <a href="{{ route('movies.show', ['id'=> $movie->id, 'name'=> $movie->name]) }}">
                <img src="{{ asset('img/Movies/'.$movie->banner) }}" alt="{{ $movie->name }}">
                <h3>{{ $movie->name }}</h3>
                <p>Duration: {{ $movie->time }}</p>
                <p>Director: {{ $movie->director }}</p>
            </a>
        </li>
        @endforeach
    </ul>
</section>
{{-- page script --}}
@push('scripts')
    {{-- <script src="js/home.js"></script> --}}
@endpush
@endsection