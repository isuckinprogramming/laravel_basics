<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
@extends('components/pageLayout')
@section('title') Register User @endsection
@section("body-content")
    {{-- @extends("components/pageNav") --}}

        <div class="container">
        <div class="row justify-content-center vh-100">
            <div class="col-md-6">
                <h1>Register Account</h1>
                <form action="/registerAccount" method="POST">
                    @csrf
                    <label for="register-name">username</label> <br>
                    <input
                        class="form-control"
                        type="text"
                        name="register-name"
                        placeholder="name"> <br>

                    <label for="register-name">email</label> <br>
                    <input
                        class="form-control"
                        type="text" name="register-email" placeholder="email"> <br>

                    <label for="register-name">password</label> <br>
                    <input
                        class="form-control"
                        type="text" name="register-password" placeholder="password"> <br>

                    <button
                        class="btn btn-success m-3 p-2"
                        type="submit">
                        Register
                    </button>
                    <a
                        href="{{route("loginAccount")}}"
                        class="btn btn-outline-danger m-3 p-2">
                        Log in
                    </a>

                </form>

            </div>
        </div>
    </div>

@endsection
