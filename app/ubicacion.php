<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    protected $fillable = ['CP', 'Calle','Num_Interno', 'Num_Externo','Fracc', 'Ciudad','Estado'];
}
