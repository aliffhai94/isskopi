<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\StoreItem;
//use App\Models\ItemProduce;
use Illuminate\Http\Request;

class StoreItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeItem = StoreItem::paginate(15);

        return $this->sendResponse('Successfully tested',$storeItem,200);
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

        $storeItem = $user->storeItems()->create($request->all());

        return $this->sendResponse('Successfully stores shop',null,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function show(StoreItem $storeItem)
    {
        return $this->sendResponse('Successfully tested shop specific',$storeItem,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreItem $storeItem)
    {
        $storeItem->update($request->all());
        return $this->sendResponse('Successfully tested update',$storeItem->refresh,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreItem $storeItem)
    {
        $storeItem->delete();
        return $this->sendResponse('Successfully Deleted',null,200);
    }
}
