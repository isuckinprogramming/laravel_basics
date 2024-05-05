<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
@extends('components/pageLayout')
@section('title') Accounts @endsection
@section("body-content")
    @extends("components/pageNav")


    <a href="{{route("registerAccount")}}">Register New Account</a>
    <a href="{{route("loginAccount")}}">Log In</a>

@endsection
