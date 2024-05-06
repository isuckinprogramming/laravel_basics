@extends('components/pageLayout')
@section('title') Update Order @endsection
@section("body-content")

    @extends("/orders_crud/OrderDataForm")

    @section("form-title") Update Order Entry : @php
            $name = $item_name;
            echo $name;
        @endphp
    @endsection
    @section("form-action-location"){{route("update-order-entry")}}@endsection

    @section("form-submit-button-title") Create Order @endsection
    @section("form-cancel-button-title") Cancel Order @endsection

    @section("current-entry-id"){{$id}}@endsection
    @section("default-order-name")@php echo $name @endphp @endsection
    @section("default-order-price"){{$price}}@endsection
    @section("default-order-quantity"){{$quantity}}@endsection
    @section("default-order-category-id"){{$category_id}}@endsection

    @extends("components/pageNav")
@endsection
