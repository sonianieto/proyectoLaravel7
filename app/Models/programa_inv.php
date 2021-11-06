<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programa_inv extends Model
{
    use HasFactory;

    protected $table = 'programas_inv';

    protected $primaryKey = "idprograma";
    


    protected $fillable = [
  
    'codigoprograma',
    'nombre_programa',
    'fecha_de_inicio',
    'fecha_de_fin',
    'objetivo',
    'resumen',
    ];
}
