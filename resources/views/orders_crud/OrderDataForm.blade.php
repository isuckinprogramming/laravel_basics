    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

<div class="container">
    <div class="row justify-content-center vh-100">
        <div class="col-md-6">
            <h1>@yield("form-title","no title default")</h1>
            <form action="@yield("form-action-location","#")" method="POST">
                @csrf
                <label for="order-name">item name</label> <br>
                <input
                    type="text"
                    name="order-name"
                    class="form-control"
                    value="@yield("default-order-name","")"
                    placeholder="item name"
                    id=""> <br>

                <label for="order-price">price</label> <br>
                <input
                    type="text"
                    name="order-price"
                    class="form-control"
                    value="@yield("default-order-price","")"
                    placeholder="price"
                    id=""> <br>

                <label for="order-quantity">quantity</label> <br>
                <input
                    type="text"
                    name="order-quantity"
                    class="form-control"
                    placeholder="quantity"
                    value="@yield("default-order-quantity","")"
                    id=""
                    > <br>

                <label for="order-category-id">category</label> <br>
                <input
                class="form-control"
                list="category-container"
                name="order-category-id"
                value="@yield("default-order-category-id","")"
                placeholder="type category id or category name"
                id="order-category-id-select">
                    <datalist id="category-container">
                        <option value="1">Tea</option>
                        <option value="2">Soda</option>
                        <option value="3">Water</option>
                        <option value="4">Juice</option>
                        <option value="5">Coffee</option>
                    </datalist>
                </input> <br>
                <button type="submit" class="btn btn-success m-2 p-3">@yield("form-submit-button-title")</button>
                <a href="{{route("orders")}}" class="btn btn-danger m-2 p-3">@yield("form-cancel-button-title")</a>

            </form>
        </div>
    </div>
</div>
