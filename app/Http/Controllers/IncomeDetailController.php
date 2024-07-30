<?php

namespace App\Http\Controllers;

use App\Models\IncomeDetail;
use App\Models\Income;
use App\Models\Article;
use Illuminate\Http\Request;

class IncomeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomedetail=IncomeDetail::all();
        return view('dashboard.incomedetail.index',['incomedetail'=>$incomedetail]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $income=Income::all();
        $article=Article::all();
        return view('dashboard.incomedetail.create',['income'=>$income,'article'=>$article]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomedetail= new IncomeDetail();
        $incomedetail->income_id=$request->input('income');
        $incomedetail->article_id=$request->input('article');
        $incomedetail->quantity=$request->input('quantity');
        $incomedetail->price=$request->input('price');
        $incomedetail->save();

        return view("dashboard.incomedetail.message",['msg'=>"Detalle de ingreso creado con éxito"]);



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
        $incomedetail=IncomeDetail::find($id);
        return view('dashboard.incomedetail.edit',['incomedetail'=>$incomedetail,'article'=>Article::all(),'income'=>Income::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $incomedetail= IncomeDetail::find($id);
        $incomedetail->income_id=$request->input('income');
        $incomedetail->article_id=$request->input('article');
        $incomedetail->quantity=$request->input('quantity');
        $incomedetail->price=$request->input('price');
        $incomedetail->save();

        return view("dashboard.incomedetail.message",['msg'=>"Detalle de ingreso Actualizado con éxito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incomedetail= IncomeDetail::find($id);
        $incomedetail->delete();
        return redirect("dashboard/incomedetail");
    }
}
