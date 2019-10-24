<?php

namespace App\Http\Controllers;
use App\negocios; 

use Illuminate\Http\Request;

class negociosCtrl extends Controller
{
    public function index()
    {
        //
    }
    public function showAll()
    {
        //Mostrar todos los pacientes
        $negocios = negocios::all();
        return response()->json($negocios);
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
        //Ingresar un nuevo negocios
        
        //objeto = clase
        $negocios = new negocios;
        $negocios->Nombre  = $request->Nombre;
        $negocios->Descripcion  = $request->Descripcion;
        $negocios->Celular  = $request->Celular;
        $negocios->Email  = $request->Email;
        $negocios->Horarios  = $request->Horarios;
        $negocios->Fotos  = $request->Fotos;
        $negocios->Logo  = $request->Logo;
        $negocios->Productos  = $request->Productos;
        $negocios->Categoria  = $request->Categoria;
        
        $negocios->save(); //insert en BD
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
        $negocios = negocios::where('id','=',$id)->get();
        return response()->json($negocios);
    }

    //LOGIN
   /* public function login(Request $request){
        $username  = $request->username;
        $password  = $request->password;
        $Usuarios = Usuarios::where('username','=',$username)->where('password','=',$password)->get();
        if ($negocios[0]->username==null) {
            return 0;
        }else {
            return response()->json($negocios[count($negocios)-1]);
        }
    }*/ 

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
        //Actualizar los datos de la negocios
        $negocios = negocios::findOrFail($id);
        $negocios->update($request->all()); //For que actualiza datos de la base de datos con el request
        return $negocios;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        negocios::find($id)->delete();
        return 204;
    }
}
