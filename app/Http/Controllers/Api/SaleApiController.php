<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;

class SaleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale=Sale::all();
        return ($sale);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale= new Sale();
        $sale->client_id=$request->input('person');
        $sale->user_id=$request->input('user');
        $sale->receipt_type=$request->input('receipt_type');
        $sale->receipt_series=$request->input('receipt_series');
        $sale->receipt_number=$request->input('receipt_number');
        $sale->tax=$request->input('tax');
        $sale->total=$request->input('total');
        $sale->status=$request->input('status');
        $sale->created_at=$request->input('created_at');
        $sale->save();

        return ($sale);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sale= Sale::find($id);
        $sale->client_id=$request->input('person');
        $sale->user_id=$request->input('user');
        $sale->receipt_type=$request->input('receipt_type');
        $sale->receipt_series=$request->input('receipt_series');
        $sale->receipt_number=$request->input('receipt_number');
        $sale->tax=$request->input('tax');
        $sale->total=$request->input('total');
        $sale->status=$request->input('status');
        $sale->created_at=$request->input('created_at');
        $sale->save();

        return ($sale);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sale=Sale::find($id);
        $sale->delete();
        return redirect("dashboard/sale");
    }
}
