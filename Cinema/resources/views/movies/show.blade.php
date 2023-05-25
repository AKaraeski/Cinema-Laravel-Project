@extends('layouts.master')
@section('content')
{{-- page style --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/movie.css') }}">
@endpush
<section class="main1">
    <div class="poster">
        <img src="{{ asset('img/posters/'.$movie->poster) }}" alt="avatar">
    </div>
    <div class="info">
        <table>
            <tbody>
                <tr>
                    <td class="nt">Name</td>
                    <td class="nt2">{{ $movie->name }}</td>
                </tr>
                <tr>
                    <td>Rate</td>
                    <td>{{ $movie->rate }}/10</td>
                </tr>
                <tr>
                    <td>Language</td>
                    <td>{{ $movie->language }}</td>
                </tr>
                <tr>
                    <td>Kind</td>
                    <td>{{ $movie->kind }}</td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>{{ $movie->category }}</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>{{ $movie->time }}</td>
                </tr>
                <!-- <tr>
                    <td>Main Actor</td>
                    <td>Tom Cruise</td>
                </tr> -->
                <tr>
                    <td>Translate</td>
                    <td>{{ $movie->translate }}</td>
                </tr>
            </tbody>
        </table>
        <a href=""></a>
    </div>
    <!-- action="#main_2" -->
    <div class="Booking_form">
        
            <label for="cinema">Choose Cinema&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select name="cinema" id="cinema" onchange="select_cinema();">
                <option value="none"> </option>
                <option value="Galaxy">Galaxy</option>
                <option value="Metro">Metro</option>
                <option value="Luxorito">Luxorito</option>
                <option value="Gawhara">Gawhara</option>
                <option value="Plaza">Plaza</option>
                <option value="Arkan">Arkan</option>
            </select>

            <br>
            <br>
            <label for="Date">Choose Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select name="Date" id="date" onchange="select_Date();">
                <option > </option>
                
                <option value="21/5/2023">21/5/2023</option>
                <option value="17/5/2023">17/5/2023</option>
                <option value="16/5/2023">16/5/2023</option>
                <option value="18/5/2023">18/5/2023</option>
                <option value="22/5/2023">22/5/2023</option>
                <option value="19/5/2023">19/5/2023</option>
            </select>
            <br>
            <br>
            <label for="Time">Choose ShowTime  </label>
            <select name="Time" id="Time" onchange="select_Time();">
                <option > </option>

                <option value="09:00">09:00</option>
                <option value="12:00">12:00</option>
                <option value="15:00">15:00</option>
                <option value="18:00">18:00</option>
                <option value="21:00">21:00</option>
                <option value="00:00">00:00</option>
            </select>

            <br>
            <br>

            <label for="Screen">Choose Screen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select name="Screen" id="screen" onchange="select_Screen();">
                <option ></option>

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <br>
            
            <button id="button">Submit</button>

        
    </div>
</section>
<section class="main2" id="main_2">
    <h1>Trailer</h1>
    <video controls>
        <source src="{{ asset('video/'.$movie->trailer) }}" type="video/mp4">
    </video>
    <button class="next" id="next_1">Next &nbsp;&nbsp;<span>></span></button>
</section>
<section class="main3" id="section_3">
    <div id="seats">
        <div id="left">
            <div id="letter">
                <div class="letter">A</div>
            </div>
            <div id="set">    
                <div id="r${i+1}">${i+1}</div>    
            </div>
        </div>
        <div id="mid">
            <div id="letter2">
                <div class="letter">A</div>
            </div>
            <div id="set2">    
                <div id="r${i+1}">${i+1}</div>    
            </div>

        </div>
        <div id="right">

            <div id="letter3">
                <div class="letter">A</div>
            </div>
            <div id="set3">    
                <div id="r${i+1}">${i+1}</div>    
                
            </div>

        </div>
        
        
        
    </div>
    <button class="next" id="next_2">Next &nbsp;&nbsp;<span>></span></button>
</section>
<section class="main6" id="section_6">
    <div class="top">
        <div class="poster">
            <img src="{{ asset('img/posters/'.$movie->poster) }}" alt="">
        </div>
        <div class="diiv">
            <img src="{{ asset('icon/clock.png') }}" alt="">
            <p id="show_date">Friday 28 Aprill <br>09:30 pm</p>
        </div>
        <div class="diiv">
            <img src="{{ asset('icon/location-pin.png') }}" alt="">
            <p>EKARNAK <br>LUXOR</p>
        </div>
        <div class="diiv" >
            <img src="{{ asset('icon/film.png') }}" alt="">
            <p id="cinema_name">Galaxy</p>
        </div>
        <div class="diiv">
            <img src="{{ asset('icon/ticket (1).png') }}" alt="">
            <p id="tickets_nums">1 Ticket <br>2D</p>
        </div>
        <div class="diiv2">
            <img src="{{ asset('icon/chair.png') }}" alt="">
            <div id="ticket_num">
                <p >E11</p>
            </div>  
        </div>
    </div>
    <div class="bot">
        
        <div class="right">
            <div class="left1">
                <p id="ticket_nuum"><span>Tickets &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span> 1</p>
                <p><span>Ticket Price &nbsp;&nbsp;&nbsp;:</span> 120 EGP</p>
                <p><span>Booking Fees&nbsp;:</span> 10 EGP</p>
                <p><span>Discount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span> 0 EGP</p>
            </div>
            <div class="right1">
                <h1>Total</h1><br>
                <h2 id="total"> 130 EGP</h2>
            </div>
        </div>
    </div>
    <!-- <a href="./signup.html" class="next">Next &nbsp;&nbsp;<span>></span></a> -->

</section>
{{-- page script --}}
@push('scripts')
    <script src="{{ asset('js/movie.js') }}"></script>
@endpush
@endsection