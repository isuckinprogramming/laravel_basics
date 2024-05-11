<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
@extends('components/pageLayout')
@section('title') Login Account @endsection
@section("body-content")
    <div class="container">
        <div class="row justify-content-center vh-100">
            <div class="col-md-6">
                <h1>Log in Account</h1>
                <form action="{{route("login account")}}" method="POST">
                    @csrf
                    <br>
                    <label for="login-email">email</label> <br>
                    <input class="form-control" type="text" name="login-email" id="loginEmail"> <br>

                    <label for="login-password">password</label> <br>
                    <input class="form-control" type="text" name="login-password" id="loginPassword"> <br>

                    <br>
                    <button class="btn btn-success" type="submit">Log in</button>
                    <a href="{{route("registerAccount")}}"
                    class="btn btn-outline-danger">Register</a>

                </form>

            </div>
        </div>
    </div>


@endsection
