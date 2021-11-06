<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lineas_inv extends Model
{
    use HasFactory;

    protected $table = 'lineas_inv';

    protected $primaryKey = "id";

    protected $fillable = [
  
            'nombre_linea',
            'programa_formacion',
            'fecha_de_creacion',
            'resumen_linea',
            'objetivo_linea',
            'enfasis_linea',
            'tesis_linea',
            'idgrupo',
    ];
}
