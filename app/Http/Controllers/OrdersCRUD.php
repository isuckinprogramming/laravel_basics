<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOrderCreate;

use App\Models\orders;
use Barryvdh\Debugbar\Facades\Debugbar;
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

        Debugbar::info("raw sdata : ". $request);

        $validatedData = $request->validated();
        // Debugbar::info("Validated form data : ". $validatedData);


        $updateData = [
            "item_name" => $validatedData["order-name"],
            "id" => $validatedData["current-entry-id"],
            "price" => $validatedData["order-price"],
            "quantity" => $validatedData["order-quantity"],
            "category_id" => $validatedData["order-category-id"]

        ];
        // Debugbar::info("Validated form data : ". $updateData);

        orders::where("id",$validatedData["current-entry-id"])->update($updateData);
        // Debugbar::info("Result from update query : ". $result);
        return redirect()->route("orders");

    }

    public function showUpdatePage(Request $request)
    {
        Debugbar::info($request);

        $entryId = $request->input("id");
        Debugbar::info($entryId);

        $entryData = orders::findOrFail($entryId);

        // $updatePageParameters = [
        //     "orderName" => $entryData["item_name"],
        //     "orderPrice" => $entryData->price,
        //     "orderQuantity" => $entryData->quantity,
        //     "orderCategoryId" => $entryData->category_id
        // ];
        Debugbar::info($entryData);

        Debugbar::info($entryData->getAttribute("item_name"));
        $data = [
            "id" => $entryData->getAttribute("id"),
            "item_name" => $entryData->getAttribute("item_name"),
            "price" => $entryData->getAttribute("price"),
            "quantity" => $entryData->getAttribute("quantity"),
            "category_id" => $entryData->getAttribute("category_id"),
        ];

        Debugbar::info($data);

        return view("/orders_crud/update", $data);
        // if ($entryData->isNotEmpty()) {

        // }
        // return redirect()->route("orders");
    }

        public function destroy(Request $request)
    {
        $item = orders::findOrFail($request->input("id"));
        $item->delete();

        return
            redirect()->
            route("orders")->
            with('success', 'Order deleted successfully.');

    }

}
