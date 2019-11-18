<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class negocios extends Model
{
    protected $fillable = ['Nombre',
                            'Descripcion',
                            'Celular', 
                            'Email',
                            'Horarios',
                            'Fotos', 
                            'Logo', 
                            'Productos', 
                            'Categoria'];

}
