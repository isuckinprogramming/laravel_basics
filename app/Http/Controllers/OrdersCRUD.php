<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOrderCreate;

use App\Models\orders;

use Illuminate\Http\Request;

class OrdersCRUD extends Controller
{


    public function store(CheckOrderCreate $request)
    {
        $validatedData = $request->validated();

        orders::create([
            "item_name" => $validatedData["order-name"],
            "price" =>  $validatedData["order-price"],
            "quantity" =>  $validatedData["order-quantity"],
            "category_id" =>  $validatedData["order-category-id"],
        ]);

        return redirect()->route("orders");
    }

    public function update(CheckOrderCreate $request)
    {

    }

    public function showUpdatePage(Request $request)
    {
        $entryId = $request->input("id");


    }
}
