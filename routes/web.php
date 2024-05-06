<?php

use App\Http\Controllers\AccountsCRUD;
use App\Http\Controllers\OrdersCRUD;
use Illuminate\Support\Facades\Route;
// use App\Model\orders;

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

Route::post(
    "update-entry-start",
    [ OrdersCRUD::class,"showUpdatePage" ]
);
