<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;


class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $income=Income::all();
        return view('dashboard.income.index',['income'=>$income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=Person::all();
        $user=User::all();
        return view('dashboard.income.create',['person'=>$person,'user'=>$user]);

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

        return view("dashboard.income.message",['msg'=>"Ingreso creado con Éxito!!"]);
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
        $income=Income::find($id);
        return view('dashboard.income.edit',['income'=>$income,'person'=>Person::all(),'user'=>User::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
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
        $income->tax=$request->input('tax');
        $income->created_at=$request->input('created_at');
        $income->updated_at=$request->input('updated_at');
        $income->save();

        return view("dashboard.income.message",['msg'=>"Ingreso actualizado con Éxito!!"]);  
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
