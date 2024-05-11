    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

<div class="container">
    <div class="row justify-content-center vh-100">
        <div class="col-md-6">
            @if($errors->any())
                @foreach($errors as $error)
                    <span>
                        {{$error}}
                    </span>
                @endforeach
            @endif
            <h1>@yield("form-title","no title default")</h1>
            <form
                action="@yield("form-action-location","#")"
                method="POST"
                id="order-data-form"
            >
                @csrf

                <input
                    type="hidden"
                    name="current-entry-id"
                    id="order-entry-id"
                    value="@yield("current-entry-id","")">

                <label for="order-name">item name</label> <br>
                <input
                    type="text"
                    name="order-name"
                    class="form-control input-order-data"
                    value="@yield("default-order-name","")"
                    placeholder="item name"
                    id="input-order-name"
                >
                <br>
                <div id="warning-message-container-order-name" class="warning-container-order-input"></div>
                <br>


                <label for="order-price">price</label> <br>
                <input
                    type="text"
                    name="order-price"
                    class="form-control input-order-data"
                    value="@yield("default-order-price","")"
                    placeholder="price"
                    id="input-order-price"\
                >
                <br>
                <div id="warning-message-container-order-price" class="warning-container-order-input" ></div>
                <br>

                <label for="order-quantity">quantity</label>
                <br>
                <input
                    type="text"
                    name="order-quantity"
                    class="form-control input-order-data"
                    placeholder="quantity"
                    value="@yield("default-order-quantity","")"
                    id="input-order-quantity"
                    >
                <br>
                <div id="warning-message-container-order-quantity" class="warning-container-order-input"></div>
                <br>

                <label for="order-category-id">category</label>
                <br>
                <input
                class="form-control input-order-data"
                list="category-container"
                name="order-category-id"
                value="@yield("default-order-category-id","")"
                placeholder="type category id or category name"
                id="input-order-category-id">
                    <datalist id="category-container">
                        <option value="1">Tea</option>
                        <option value="2">Soda</option>
                        <option value="3">Water</option>
                        <option value="4">Juice</option>
                        <option value="5">Coffee</option>
                    </datalist>
                </input>
                <br>
                <div id="warning-message-container-order-category-id" class="warning-container-order-input"></div>
                <br>

                <button
                    type="submit"
                    class="btn btn-success m-2 p-3"
                    id="button-submit-update-data"
                >
                    @yield("form-submit-button-title")
                </button>
                <a
                    href="{{route("orders")}}"
                    class="btn btn-danger m-2 p-3">
                    @yield("form-cancel-button-title")
                </a>
            </form>
        </div>
    </div>
</div>
