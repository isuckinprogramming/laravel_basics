<?php

use App\Http\Controllers\AccountsCRUD;
use App\Http\Controllers\OrdersCRUD;
use Illuminate\Support\Facades\Route;
// use App\Model\orders;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

use App\Models\orders;

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::get(
    '/create-order',
    function () {
        return view('/orders_crud/create');
    }
)->name("create-order");

Route::get(
    '/register account',
    function () {
        return view('/registerAccount');
    }
)->name("registerAccount");

Route::get(
    '/login account',
    function () {
        return view('/loginAccount');
    }
)->name("loginAccount");

Route::get(
    '/orders',
    function () {


        $retrievedTableData = \App\Models\orders::select(
            "id",
            "item_name",
            "category_id",
            "price",
            "quantity"
        )->get();

        return view(
        '/orders',
        ["tableData" => $retrievedTableData]
        );
    }
)->name("orders");

Route::get(
    '/accounts',
    function () {
        return view('/accounts');
    }
)->name("accounts");

Route::get(
    '/settings',
    function () {
        return view('/settings');
    }
)->name("settings");

Route::post(
    '/registerAccount',
    [AccountsCRUD::class,"store"]
)->name("create new account");

Route::post(
    "/loginAccount",
    [AccountsCRUD::class, "show"]
)->name("login account");

Route::post(
    "create-order-entry",
    [ OrdersCRUD::class,"store" ]
)->name("create-order-entry");

Route::post(
    "update-order-entry",
    [ OrdersCRUD::class,"update" ]
)->name("update-order-entry");

Route::get("update-entry-start", [OrdersCRUD::class,"showUpdatePage"]);

Route::get(
    "delete-order-entry",
    [OrdersCRUD::class, "destroy"]
)->name("remove-order");
// Route::get(
//     "update-entry-start",
//         function(Request $request)
//     {
//         Debugbar::info($request);

//         $entryId = $request->input("id");
//         Debugbar::info($entryId);

//         $entryData = orders::findOrFail($entryId);

//         // $updatePageParameters = [
//         //     "orderName" => $entryData["item_name"],
//         //     "orderPrice" => $entryData->price,
//         //     "orderQuantity" => $entryData->quantity,
//         //     "orderCategoryId" => $entryData->category_id
//         // ];
//         Debugbar::info($entryData);

//         Debugbar::info($entryData->getAttribute("item_name"));
//         $data = [
//             "item_name" => $entryData->getAttribute("item_name"),
//             "price" => $entryData->getAttribute("price"),
//             "quantity" => $entryData->getAttribute("quantity"),
//             "category_id" => $entryData->getAttribute("category_id"),
//         ];

//         Debugbar::info($data);

//         return view("/orders_crud/update", $data);
//         // if ($entryData->isNotEmpty()) {

//         // }
//         // return redirect()->route("orders");
//     }
// );

// Route::get(
//     "go-to-update-page",
//     function () {
//         return view("/orders_crud/update");
//     }
// )->name("go-to-update-page");


// Route::get(
//     "valid-update-entry-process",
    // function () {
    //     return view();
    // }
// );
