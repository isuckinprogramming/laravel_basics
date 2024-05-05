<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
@extends('components/pageLayout')
@section('title') Login Account @endsection
@section("body-content")
    {{-- @extends("components/pageNav") --}}
    <a href="{{route("homepage")}}">Go to Home</a>
    <a href="{{route("registerAccount")}}">Register</a>

@endsection
