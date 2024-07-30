<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use App\Models\Sale;
use App\Models\Article;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saledetail=SaleDetail::all();
        return view('dashboard.saledetail.index',['saledetail'=>$saledetail]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sale=Sale::all();
        $article=Article::all();
        return view('dashboard.saledetail.create',['sale'=>$sale,'article'=>$article]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saledetail= new SaleDetail();
        $saledetail->sale_id=$request->input('sale');
        $saledetail->article_id=$request->input('article');
        $saledetail->quantity=$request->input('quantity');
        $saledetail->price=$request->input('price');
        $saledetail->discount=$request->input('discount');
        $saledetail->save();

        return view("dashboard.saledetail.message",['msg'=>"Detalle de Venta creado con éxito"]);
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
        $saledetail=SaleDetail::find($id);
        return view('dashboard.saledetail.edit',['saledetail'=>$saledetail,'article'=>Article::all(),'sale'=>Sale::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $saledetail= SaleDetail::find($id);
        $saledetail->sale_id=$request->input('sale');
        $saledetail->article_id=$request->input('article');
        $saledetail->quantity=$request->input('quantity');
        $saledetail->price=$request->input('price');
        $saledetail->discount=$request->input('discount');
        $saledetail->save();

        return view("dashboard.saledetail.message",['msg'=>"Detalle de VENTA Actualizado con éxito"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $saledetail= SaleDetail::find($id);
        $saledetail->delete();
        return redirect("dashboard/saledetail");
    }
}
