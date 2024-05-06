<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
@extends('components/pageLayout')
@section('title') Register User @endsection
@section("body-content")
    {{-- @extends("components/pageNav") --}}

    <div>
        <a href="{{route("homepage")}}">Go to Home</a>
        <a href="{{route("loginAccount")}}">Log in</a>
    </div>

    <div>
        <form action="/registerAccount" method="POST">


        @csrf

            <label for="register-name">username</label> <br>
            <input type="text" name="register-name" placeholder="name"> <br>

            <label for="register-name">email</label> <br>
            <input type="text" name="register-email" placeholder="email"> <br>

            <label for="register-name">password</label> <br>
            <input type="text" name="register-password" placeholder="password"> <br>

            <button type="submit">Register</button>
        </form>
    </div>
@endsection
