@extends('components/pageLayout')
@section('title') Update Order @endsection
@section("head-content")
    <script
        defer="true"
        src="{{asset("js/orders/ordersCreateAndUpdate.js")}}"
    >
    </script>
@endsection

@section("body-content")

    @extends("/orders_crud/OrderDataForm")

    @section("form-title") <span>Update Order Entry : </span><h1> @php
            $name = $item_name;
            echo $name;
        @endphp
        </h1>
    @endsection
    @section("form-action-location"){{route("update-order-entry")}}@endsection

    @section("form-submit-button-title") Update @endsection
    @section("form-cancel-button-title") Cancel @endsection

    @section("current-entry-id"){{$id}}@endsection
    @section("default-order-name")@php echo $name @endphp @endsection
    @section("default-order-price"){{$price}}@endsection
    @section("default-order-quantity"){{$quantity}}@endsection
    @section("default-order-category-id"){{$category_id}}@endsection

    @extends("components/pageNav")
@endsection
