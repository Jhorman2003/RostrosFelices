<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $clientes = Cliente::all();
       return view('cliente.index', ['clientes'=> $clientes]);
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       /* $clientes = DB::table('tb_cliente')
            ->orderBy('nom_empleado')
            ->get();
        return view('cliente.new', ['clientes' => $clientes]);*/
        return view("cliente.new");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new cliente();
        $clientes-> id_cliente = $request->post('id_cliente');
        $clientes-> nom_empleado = $request->post('nom_empleado');
        $clientes-> nom_cliente = $request->post('nom_cliente');
        $clientes-> fecha = $request->post('fecha');
        $clientes->save();
        
        return redirect()->route("cliente.index");
        
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
