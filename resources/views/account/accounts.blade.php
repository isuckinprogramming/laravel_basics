<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
@extends('components/pageLayout')
@section('title') Accounts @endsection
@section("body-content")
    @extends("components/pageNav")
    <div class="container">
        <div class="row justify-content-center vh-100">
            <div class="col-md-6">
                <h1>Your Account</h1>
                <a
                    class="btn btn-outline-primary m-4 p-2"
                    href="{{route("registerAccount")}}">
                    Register New Account
                </a>
                <a
                    class="btn btn-danger m-4 p-2"
                    href="{{route("loginAccount")}}">
                    Log Out Account
                </a>

            </div>
        </div>
    </div>
@endsection
