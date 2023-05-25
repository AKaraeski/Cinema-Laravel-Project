@extends('layouts.master')
@section('content')
@php
    $filePath = app('view')->getEngineResolver()->resolve('blade')->getCompiler()->getPath();
    $fileName = pathinfo($filePath, PATHINFO_FILENAME);
    $pureName = str_replace('.blade', '', $fileName);
@endphp
{{-- page style --}}
@push('styles')
    <link rel="stylesheet" href="css/home.css">
@endpush
<section id="banner">
    <h2>Welcome to our Cinemas</h2>
    <p>Book your favorite movies now and enjoy your time at our cinemas.</p>
    <!-- <a href="./movie-page.html">View Movies</a> -->
</section>
<section id="movies">
    <button id="left-arrow"><i class="fa-solid fa-angle-left"></i></button>
    <button id="right-arrow"><i class="fa-solid fa-angle-right"></i></button>
    <h2 class="main">MOVIES</h2>
    <div id="movie-container" class="movie_container">
        <div class="movie_card">
            <div class="head">
                <img src="./img/Movies/2_john wick.jpg">
            </div>
            <div class="tail">
                <div class="left">
                        <h2 class="hh2">John Wick</h2>
        
                        <p>Duration: 3h 10m</p>
                        <p>Director: Keanu Rieves</p>
                </div>
                <div class="right">
                    <button  onclick="document.location = './john_wick_chapter_4.html'" id="john_wick_btn">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Tickets</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="movie_card">
            <div class="head">
                <img src="./img/Movies/9_The Fabelmans.jpg">
            </div>
            <div class="tail">
                <div class="left">
                        <h2 class="hh2">The Fabelmans</h2>
        
                        <p>Duration: 2h 20m</p>
                        <p>Director: Steaven</p>
                </div>
                <div class="right">
                    <button onclick="document.location = './fabelmans.html'">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Tickets</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="movie_card">
            <div class="head">
                <img src="./img/Movies/11_Venom.jpg">
            </div>
            <div class="tail">
                <div class="left">
                        <h2 class="hh2">Venom</h2>
        
                        <p>Duration: 1h 50m</p>
                        <p>Director: Christopher Nolan</p>
                </div>
                <div class="right">
                    <button onclick="document.location = './venom_ver2.html'">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Tickets</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="movie_card">
            <div class="head">
                <img src="./img/Movies/5_The Amazing Spider-Man 2.jpg">
            </div>
            <div class="tail">
                <div class="left">
                        <h2 class="hh2">The Amazing Spider-Man 2</h2>
        
                        <p>Duration: 2h 20m</p>
                        <p>Director: Christopher Nolan</p>
                </div>
                <div class="right">
                    <button onclick="document.location = './amazing_spiderman_2.html'">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Tickets</p>
                    </button>
                </div>
            </div>
        </div>
        <div  class="movie_card">
            <div class="head">
                <img src="./img/Movies/1_Avatar.jpg">
            </div>
            <div class="tail">
                <div class="left">
                        <h2 class="hh2">Avatar</h2>
        
                        <p id="test">Duration: 3h 30m</p>
                        <p>Director: James Cameron</p>
                </div>
                <div class="right">
                    <button onclick="document.location = './avatar.html'">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Tickets</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="movie_card">
            <div class="head">
                <img src="./img/Movies/8_the-dark-knight-rises.png">
            </div>
            <div class="tail">
                <div class="left">
                        <h2 class="hh2">The Dark Knight Rises</h2>
        
                        <p>Duration: 2h 20m</p>
                        <p>Director: Christopher Nolan</p>
                </div>
                <div class="right"  >
                    <button onclick="document.location = './dark_knight_rises.html'">
                        <i class="fa-solid fa-ticket"></i>
                        <p>Tickets</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cinemas">
    <a href="{{ route('cinemas.index') }}" id="hg"><h2>Cinemas</h2></a>
    <ul>
        <li>
            <a href="./Galaxy-page.html">
                <img src="./img/Cinema/New folder/1.png" alt="Cinema 1">
                <h3>Galaxy</h3>
                <p>Address: Luxor - Train Station</p>
            </a>
        </li>
        <li>
            <a href="./gawhara.html">
                <img src="./img/Cinema/New folder/4.png" alt="Cinema 2">
                <h3>Gawhara</h3>
                <p>Address: Luxor - luxor Temple</p>
            </a>
        </li>
        <li>
            <a href="./metro.html">
                <img src="./img/Cinema/New folder/2.png" alt="Cinema 3">
                <h3>Metro</h3>
                <p>Address: Luxor - Karnak Temple </p>
            </a>
        </li>
        
    </ul>
</section>
{{-- page script --}}
@push('scripts')
    <script src="js/home.js"></script>
@endpush
@endsection