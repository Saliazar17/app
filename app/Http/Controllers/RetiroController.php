<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiro;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id,string $id2,string $nombre)
    {
        //
        $empleado=$id;
        $afi=$id2;
        $nom=$nombre;
        $datosRetiro=Retiro::all();
        return view('retiro.index')->with('datosRetiro',$datosRetiro)
        ->with('empleado',$empleado)
        ->with('afi',$afi)
        ->with('nombre',$nombre);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id1,string $nombrea,string $id2)
    {
        //
        $datos=$id1;
        $datosafiliado=$nombrea;
        $datosempleado=$id2;
        return view('retiro.create')
        ->with('id1',$datos)
        ->with('nombrea',$datosafiliado)
        ->with('id2',$datosempleado);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $retiro=new Retiro();
        $retiro->codempleado=$request->get('codempleado');
        $retiro->codafiliado=$request->get('codafiliado');
        $retiro->nombreafiliado=$request->get('nombreafiliado');
        $retiro->fecha=$request->get('fecha');
        $retiro->cantidad=$request->get('cantidad');

        $retiro->save();

        return redirect('/empleado');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
