@extends('layouts.master')
@section('content')
{{-- page style --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cinemas.css') }}">
@endpush
<section id="cinemas">
    <h2>Cinemas</h2>
    <ul>
        @foreach ($cinemas as $cinema)
        <li>
            <a href="{{ route('cinemas.show', ['id'=> $cinema->id]) }}">
                <img src="{{ asset('img/Cinema/New folder/'.$cinema->banner) }}" alt="{{ $cinema->name }}">
                <h3>{{ $cinema->name }}</h3>
                <p>Address: {{ $cinema->address }}</p>
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