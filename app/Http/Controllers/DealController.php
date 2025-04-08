<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\User;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('seller_id')){
            $user = User::find($request->seller_id);
            $deals = $user->seller_deals;
        }
        elseif ($request->has('buyer_id')) {
            $user = User::find($request->buyer_id);
            $deals = $user->buyer_deals;
        }
        else{
            $deals = Deal::all();
        }

        return response()->json([
            'deals' => $deals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $deal = Deal::create($data);

        return response()->json([
            'deal' => $deal,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deal $deal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deal $deal)
    {
        //
    }
}
