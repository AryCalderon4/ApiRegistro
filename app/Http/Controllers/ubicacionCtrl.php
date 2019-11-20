<?php

namespace App\Http\Controllers;
use App\ubicacion; 

use Illuminate\Http\Request;

class ubicacionCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showAll()
    {
        //Mostrar todos los pacientes
        $ubicacion = Ubicacion::all();
        return response()->json($ubicacion);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ingresar un nuevo ubicacion
        
        //objeto = clase
        $ubicacion = new Ubicacion;
        $ubicacion->CP  = $request->CP;
        $ubicacion->Calle  = $request->Calle;
        $ubicacion->Num_Interno  = $request->Num_Interno;
        $ubicacion->Num_Externo  = $request->Num_Externo;
        $ubicacion->Fracc  = $request->Fracc;
        $ubicacion->Ciudad  = $request->Ciudad;
        $ubicacion->Estado  = $request->Estado;
        $ubicacion->negocio_id  = $request->negocio_id;
        $ubicacion->save(); //insert en BD
        return 1;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Select 
    {
       //Trae la informacion del id 
        $ubicacion = Ubicacion::where('id','=',$id)->get();
        return response()->json($ubicacion);
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
        //Actualizar los datos de la ubicacion
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->update($request->all()); //For que actualiza datos de la base de datos con el request
        return $ubicacion;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ubicacion::find($id)->delete();
        return 204;
    }
}