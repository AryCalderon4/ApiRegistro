<?php

namespace App\Http\Controllers;
use App\login;

use Illuminate\Http\Request;

class loginCtrln extends Controller
{
    public function index()
    {
        return response()->json(negocio);
    }
    public function showAll()
    {
        //Mostrar todos los pacientes
        $login = login::all();
        return response()->json($login);
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
        //Ingresar un nuevo login
        
        //objeto = clase
        $login = new login;
        $login->Correo  = $request->Correo;
        $login->Contrasena  = $request->Contrasena;
        
        $login->save(); //insert en BD
        //Envia el ultimo regstro que se inserto
        return response() -> json($login);
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
        $login = login::where('id','=',$id)->get();
        return response()->json($login);
    }

    //LOGIN
   /* public function login(Request $request){
        $username  = $request->username;
        $password  = $request->password;
        $Usuarios = Usuarios::where('username','=',$username)->where('password','=',$password)->get();
        if ($login[0]->username==null) {
            return 0;
        }else {
            return response()->json($login[count($login)-1]);
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
        //Actualizar los datos de la login
        $login = login::findOrFail($id);
        $login->update($request->all()); //For que actualiza datos de la base de datos con el request
        return $login;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        login::find($id)->delete();
        return 204;
    }
}
