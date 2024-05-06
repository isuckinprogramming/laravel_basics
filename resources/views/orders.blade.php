{{-- @php
    use \App\Model\orders;

    $tableData = orders::select(
    "id",
    "name",
    "category",
    "price",
    "quantity"
)->get();
@endphp --}}

@extends('components/pageLayout')
@section('title') Orders @endsection
@section("head-content")
    <script defer src="{{asset("js/ordersDeleteAndUpdate.js")}}"></script>
@endsection
@section("body-content")
    @extends("orders_crud/read")
    @extends("components/pageNav")
@endsection
