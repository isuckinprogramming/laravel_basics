<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOrderCreate;
use Illuminate\Http\Request;

use App\Models\orders;
use Barryvdh\Debugbar\Facades\Debugbar;

use Illuminate\Support\Facades\Hash;

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

    public function show() {


        $retrievedTableData = orders::select(
            "id",
            "item_name",
            "category_id",
            "price",
            "quantity"
        )->get();

        return view(
        '/dashboard/orders',
        ["tableData" => $retrievedTableData]
        );
    }

    public function update(CheckOrderCreate $request)
    {

        Debugbar::info("raw data : ". $request);

        $validatedData = $request->validated();

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
        $sessionDataKey = $request->input("session_data_key");
        $dataOfEntryToBeUpdated = session()->get($sessionDataKey);

        return view(
        "/orders_crud/update",
        $dataOfEntryToBeUpdated
        );
    }

    /**
     * The function accepts an entry id to be used to
     * identify which order entry will be updated. Then
     * returns an update view with the data of the entry to be updated.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function prepareUpdatePage(Request $request)
    {
        Debugbar::info($request);

        $entryId = $request->input("id");

        Debugbar::info($entryId);

        $entryData = orders::findOrFail($entryId);

        Debugbar::info($entryData);
        Debugbar::info($entryData->getAttribute("item_name"));

        $dataOfEntryToBeUpdated = [
            "id" => $entryData->getAttribute("id"),
            "item_name" => $entryData->getAttribute("item_name"),
            "price" => $entryData->getAttribute("price"),
            "quantity" => $entryData->getAttribute("quantity"),
            "category_id" => $entryData->getAttribute("category_id"),
        ];

        $dataHashKey = Hash::make(uniqid());

        session()->put("".$dataHashKey."" ,$dataOfEntryToBeUpdated);

        Debugbar::info($dataOfEntryToBeUpdated);
        // return view(
        // "/orders_crud/update",
        // $dataOfEntryToBeUpdated
        // );

        return json_encode(
            [
                "status" => true,
                "session_data_key" => $dataHashKey
            ]
        );
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

    // I plan to execute all queries here to handle all the exceptions inside the function and
    // not redefine a try-catch for every function.
    private function executeQueryAndHandleError()
    {



    }

}
