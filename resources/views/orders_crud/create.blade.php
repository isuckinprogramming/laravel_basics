@extends('components/pageLayout')
@section('title') Create Order @endsection
@section("body-content")

    @extends("/orders_crud/OrderDataForm")
    @section("form-title") Create Order @endsection
    @section("form-action-location"){{route("create-order-entry")}}@endsection
    @section("form-submit-button-title") Create Order @endsection
    @section("form-cancel-button-title") Cancel Order @endsection
    @extends("components/pageNav")

@endsection
