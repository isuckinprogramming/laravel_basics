
<div class="container m-4 p-2">
    <a class="btn btn-success m-2 p-4" href="{{route("create-order")}}">+ ADD</a>
    <table class="table table-striped table-dark ">
        <thead class="rounded mt-3 p-2">
            <tr>
                <th>category</th>
                <th>name</th>
                <th>quantity</th>
                <th>price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $tableData as $data )
                <tr>
                    <td>{{$data->category_id}}</td>
                    <td>{{$data->item_name}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->price}}</td>
                    <td>
                        <button class="btn bg-warning update-trigger" data-entry-id={{$data->id}}>edit</button>
                        <button class="btn btn-danger delete-trigger" data-entry-id={{$data->id}}>delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
