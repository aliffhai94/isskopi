<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\ItemProduce;
use Illuminate\Http\Request;

class ItemProduceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemProduce = ItemProduce::paginate(15);

        return $this->sendResponse('Successfully tested',$itemProduce,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $itemProduce = $user->itemProduces()->create($request->all());

        return $this->sendResponse('Successfully tested store',null,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemProduce  $itemProduce
     * @return \Illuminate\Http\Response
     */
    public function show(ItemProduce $itemProduce)
    {
        return $this->sendResponse('Successfully tested SEE SPECIFIC',$itemProduce,200);
    }

    /**
     * Update the specified resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemProduce  $itemProduce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemProduce $itemProduce)
    {
        $itemProduce->update($request->all());
        return $this->sendResponse('Successfully tested update',$itemProduce->refresh,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemProduce  $itemProduce
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemProduce $itemProduce)
    {
        $itemProduce->delete();
        return $this->sendResponse('Successfully Deleted',null,200);
    }
}
