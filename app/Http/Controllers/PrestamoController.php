<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestamo = Prestamo::all();
        return $prestamo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prestamo.create');
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
        $prestamo = new Prestamo();
        $prestamo -> libro_id = $request -> libro_id;
        $prestamo -> cliente_id = $request -> cliente_id;
        $prestamo -> costo = $request -> costo;
        $prestamo -> save();
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
        $prestamo = Prestamo::find($id);
        return $prestamo;
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
        //
        $prestamo = Prestamo :: findOrFail($request->id);
        $prestamo -> libro_id = $request -> libro_id;
        $prestamo -> cliente_id = $request -> cliente_id;
        $prestamo -> costo = $request -> costo;
        $prestamo -> save();
        return $prestamo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prestamo = Prestamo::find($id);
        $prestamo -> delete();
        return redirect()-> route('prestamo.index');
    }
}
