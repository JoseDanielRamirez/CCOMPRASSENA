<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;

class IncomeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income=Income::all();
        return ($income);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income();
        $income->provider_id=$request->input('person');
        $income->user_id=$request->input('user');
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->tax=$request->input('tax');
        $income->created_at=$request->input('created_at');
        $income->updated_at=$request->input('updated_at');
        $income->save();

        return ($income);
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
        $income=Income::find($id);
        $income->provider_id=$request->input('person');
        $income->user_id=$request->input('user');
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->created_at=$request->input('created_at');
        $income->updated_at=$request->input('updated_at');
        $income->save();

        return ($income);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $income=Income::find($id);
        $income->delete();
        
        return redirect("dashboard/income");
    }
}
