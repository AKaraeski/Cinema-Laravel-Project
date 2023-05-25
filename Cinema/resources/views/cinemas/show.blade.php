@extends('layouts.master')
@section('content')
{{-- page style --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cinema.css') }}">
@endpush
<section id="cinema-photo">
    <img src="{{ asset('img/Cinema/'.$cinema->bg_image) }}" alt="">
</section>
<section id="movies">
    <h2>Movies</h2>
    <ul>
        <li>
            <a href="./john_wick_chapter_4.html">
                <img src="./img/Movies/2_john wick.jpg" alt="Movie 1">
                <h3>John Wick 4</h3>
                <p>Duration: <span>2h 30m</span></p>
                <p>Director: <span>keanu Rieves</span></p>
                <p>Section : <span>1</span></p>
                <p >Time  &nbsp;&nbsp;&nbsp; &nbsp; : <span class="def">12:3 - 3:6 - 6:9</span></p>
            </a>
        </li>
        <li>
            <a href="./dark_knight_ver3.html">
                <img src="./img/Movies/3_the dark knight.jpg" alt="Movie 2">
                <h3>The Dark Knight</h3>
                <p>Duration: <span>2h 30m</span></p>
                <p>Director: <span>keanu Rieves</span></p>
                <p>Section : <span>4</span></p>
                <p >Time &nbsp;&nbsp;&nbsp; &nbsp;: <span class="def">12:3 - 3:6 - 6:9</span></p>
            </a>
        </li>
        <li>
            <a href="./top_gun.html">
                <img src="./img/Movies/10_Top_Gun_Maverick.jpg" alt="Movie 3">
                <h3>Top Gun Maverick</h3>
                <p>Duration: <span>2h 30m</span></p>
                <p>Director: <span>keanu Rieves</span></p>
                <p>Section : <span>2</span></p>
                <p >Time  &nbsp;&nbsp;&nbsp;&nbsp;  : <span class="def">12:3 - 3:6 - 6:9</span></p>
            </a>
        </li>
        <li>
            <a href="./fabelmans.html">
                <img src="./img/Movies/9_The Fabelmans.jpg" alt="Movie 3">
                <h3>The Fabelmans</h3>
                <p>Duration: <span>2h 30m</span></p>
                <p>Director: <span>keanu Rieves</span></p>
                <p>Section : <span>3</span></p>
                <p >Time  &nbsp;&nbsp;&nbsp; &nbsp;: <span class="def">12:3 - 3:6 - 6:9</span></p>
                
            </a>
            
        </li>
        <li>
            <a href="./thor_ragnarok_ver2.html">
                <img src="./img/Movies/6_Thor Ragnarok.png" alt="Movie 3">
                <h3>Thor Ragnarok</h3>
                <p>Duration: <span>2h 30m</span></p>
                <p>Director: <span>keanu Rieves</span></p>
                <p>Section : <span>6</span></p>
                <p >Time  &nbsp;&nbsp;&nbsp; &nbsp;: <span class="def">12:3 - 3:6 - 6:9</span></p>
            </a>
        </li>
        <li>
            <a href="./dark_knight_rises.html">
                <img src="./img/Movies/8_the-dark-knight-rises.png" alt="Movie 3">
                <h3>The Dark Knight Rises</h3>
                <p>Duration: <span>2h 30m</span></p>
                <p>Director: <span>keanu Rieves</span></p>
                <p>Section : <span>5</span></p>
                <p >Time  &nbsp;&nbsp;&nbsp; &nbsp; : <span class="def">12:3 - 3:6 - 6:9</span></p>
            </a>
        </li>
    </ul>
</section>
{{-- page script --}}
@push('scripts')
    <script src="{{ asset('js/movie.js') }}"></script>
@endpush
@endsection