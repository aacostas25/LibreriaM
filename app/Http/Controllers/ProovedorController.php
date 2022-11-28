<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proovedor;

class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proovedor = Proovedor::all();
        return view('proovedor.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proovedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $proovedor = new Proovedor();
        $proovedor -> nombre = $request -> nombre;
        $proovedor -> apellido = $request -> apellido;
        $proovedor -> celular = $request -> celular;
        $proovedor -> nit = $request -> nit;
        $proovedor -> save();
        return redirect()->route('proovedor.listaproovedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proovedor = Proovedor :: findOrFail($request->id);
        $proovedor -> nombre = $request -> nombre;
        $proovedor -> apellido = $request -> apellido;
        $proovedor -> celular = $request -> celular;
        $proovedor -> nit = $request -> nit;
        $proovedor -> save();
        return redirect()->route('proovedor.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proovedor = Proovedor::destroy($id);
        return redirect()->route('proovedor.create');
    }
}
