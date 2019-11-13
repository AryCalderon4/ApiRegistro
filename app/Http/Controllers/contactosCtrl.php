<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactos; 

class contactosCtrl extends Controller
{
    public function index()
    {
        //
    }
    public function showAll()
    {
        //Mostrar todos los pacientes
        $contactos = Contactos::all();
        return response()->json($contactos);
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
        //Ingresar un nuevo Contactos
        
        //objeto = clase
        $contactos = new Contactos;
        $contactos->Pweb  = $request->Pweb;
        $contactos->Whatsapp  = $request->Whatsapp;
        $contactos->Facebook  = $request->Facebook;
        $contactos->Twitter  = $request->Twitter;
        $contactos->Instagram  = $request->Instagram;
        $contactos->Youtube  = $request->Youtube;
        $contactos->negocio_id  = $request->negocio_id;
        $contactos->save(); //insert en BD
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
        $contactos = Contactos::where('id','=',$id)->get();
        return response()->json($contactos);
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
        //Actualizar los datos de la Contactos
        $contactos = Contactos::findOrFail($id);
        $contactos->update($request->all()); //For que actualiza datos de la base de datos con el request
        return $contactos;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contactos::find($id)->delete();
        return 204;
    }
}

