<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto_inv extends Model
{
    use HasFactory;

    protected $table = 'proyectos_inv';

    protected $primaryKey = "idproyecto";
    
    public $timestamps = false;

    protected $fillable = [
  
    'codigoproyecto',
    'nombre_proyecto',
    'fecha_de_inicio',
    'fecha_de_fin',
    'objetivo',
    'resumen',
    'idprograma', 
    'idsemillero',

    ];
}
