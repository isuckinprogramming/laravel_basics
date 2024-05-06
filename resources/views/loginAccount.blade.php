<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
@extends('components/pageLayout')
@section('title') Login Account @endsection
@section("body-content")
    {{-- @extends("components/pageNav") --}}
    <a href="{{route("homepage")}}">Go to Home</a>
    <a href="{{route("registerAccount")}}">Register</a>


    <h1>Log in Account</h1>
    <form action="{{route("login account")}}" method="POST">
        @csrf
        <br>
        <label for="login-email">email</label> <br>
        <input type="text" name="login-email" id="loginEmail"> <br>

        <label for="login-password">password</label> <br>
        <input type="text" name="login-password" id="loginPassword"> <br>

        <br>
        <button type="submit">Log in</button>
    </form>
@endsection
