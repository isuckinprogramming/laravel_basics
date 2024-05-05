<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

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
        return view('/orders');
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
