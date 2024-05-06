@extends('components/pageLayout')
@section('title') Update Order @endsection
@section("body-content")

    @extends("/orders_crud/OrderDataForm")

    @section("form-title") Update Order Entry : {{$orderName}} @endsection
    @section("form-action-location"){{route("create-order-entry")}}@endsection

    @section("form-submit-button-title") Create Order @endsection
    @section("form-cancel-button-title") Cancel Order @endsection

    @section("default-order-name") {{ $orderName }} @endsection
    @section("default-order-price") {{ $orderPrice }} @endsection
    @section("default-order-quantity") {{ $orderQuantity }} @endsection
    @section("default-order-category-id") {{ $orderCategoryId }} @endsection

    @extends("components/pageNav")



@endsection
