@extends('components/pageLayout')
@section('title') Orders @endsection
@section("head-content")
    <script
        defer="true"
        src="{{asset("js/dependency/dataTables.dataTables.js")}}">
    </script>
    <script
        defer="true"
        src="{{asset("js/dependency/dataTables.js")}}">
    </script>
    <script
        defer="true"
        src="{{asset("js/orders/ordersRequestDeleteAndUpdate.js")}}">
    </script>
    <link rel="stylesheet" href="{{asset("css/dataTables.dataTables.css")}}">
@endsection
@section("body-content")
    @extends("orders_crud/read")
    @extends("components/pageNav")
    <script>
        $(document).ready(function(){
            $("#orders-table").DataTable();
        });
    </script>
@endsection
