<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoController extends Controller
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
        $datosDeposito=Deposito::all();
        return view('deposito.index')
        ->with('datosDeposito',$datosDeposito)
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
        return view('deposito.create')
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
        $deposito=new deposito();
        $deposito->codempleado=$request->get('codempleado');
        $deposito->codafiliado=$request->get('codafiliado');
        $deposito->nombreafiliado=$request->get('nombreafiliado');
        $deposito->fecha=$request->get('fecha');
        $deposito->cantidad=$request->get('cantidad');

        $deposito->save();

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
