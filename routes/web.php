<?php

use App\Http\Controllers\AccountsCRUD;
use App\Http\Controllers\OrdersCRUD;
use Illuminate\Support\Facades\Route;

// ----------- DASHBOARD ---------------------

Route::get('/', function () {
    return view('/dashboard/homepage');
})->name("homepage");

Route::get(
    '/settings',
    function () {
        return view('/dashboard/settings');
    }
)->name("settings");

// ----------- DASHBOARD ---------------------


// ----------- ACCOUNTS ---------------------

Route::get(
    '/accounts',
    function () {
        return view('/account/accounts');
    }
)->name("accounts");

Route::get(
    '/register account',
    function () {
        return view('/account/registerAccount');
    }
)->name("registerAccount");

Route::get(
    '/account/login account',
    function () {
        return view('/account/loginAccount');
    }
)->name("loginAccount");


Route::post(
    '/registerAccount',
    [AccountsCRUD::class,"store"]
)->name("create new account");

Route::post(
    "/loginAccount",
    [AccountsCRUD::class, "show"]
)->name("login account");

// ----------- ACCOUNTS ---------------------


// ----------- ORDERS ---------------------

Route::get(
    '/create-order',
    function () {
        return view('/orders_crud/create');
    }
)->name("create-order");

Route::get(
    '/orders',
[OrdersCRUD::class,"show"]
)->name("orders");

Route::post(
    "create-order-entry",
    [ OrdersCRUD::class,"store" ]
)->name("create-order-entry");

Route::post(
    "update-order-entry",
    [ OrdersCRUD::class,"update" ]
)->name("update-order-entry");

Route::get(
    "request-update-order-entry",
    [OrdersCRUD::class,"prepareUpdatePage"]
);

Route::get(
    "load-update-page",
    [OrdersCRUD::class,"showUpdatePage"]
);

Route::get(
    "delete-order-entry",
    [OrdersCRUD::class, "destroy"]
)->name("remove-order");

// ----------- ORDERS ---------------------
