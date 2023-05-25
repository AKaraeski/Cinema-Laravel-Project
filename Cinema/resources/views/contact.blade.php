@extends('layouts.master')
@section('content')
{{-- page style --}}
@push('styles')
    <link rel="stylesheet" href="css/contact.css">
@endpush
<div class="main">
    <form class="contact">
        <h1>contact us</h1>
        
        <input class="email_input"
        name="email" type="email"
        placeholder="email@example.com" 
        required>
        
        <input class="discription"
        name="suggestion" type="text"
        placeholder="Put your suggestions" 
        required>

        <button type="submit" class="send">send</button>
    </form> 
</div>
{{-- page script --}}
@push('scripts')
    {{-- <script src="js/home.js"></script> --}}
@endpush
@endsection