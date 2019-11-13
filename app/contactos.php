<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactos extends Model
{
    protected $fillable = ['PWeb', 'Whatsapp', 'Facebook', 'Twitter', 'Instagram', 'Youtube', 'negocio_id'];
}
