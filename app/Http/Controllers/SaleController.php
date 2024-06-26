<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Person;
use App\Models\User;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale=Sale::all();
        return view('dashboard.sale.index',['sale'=>$sale]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=Person::all();
        $user=User::all();
        return view('dashboard.sale.create',['person'=>$person,'user'=>$user]);
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

        return view("dashboard.sale.message",['msg'=>"Venta creada con éxito!"]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sale=Sale::find($id);
        return view('dashboard.sale.edit',['sale'=>$sale,'person'=>Person::all(),'user'=>User::all()]);
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

        return view("dashboard.sale.message",['msg'=>"Venta actualizada con éxito!"]);
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
