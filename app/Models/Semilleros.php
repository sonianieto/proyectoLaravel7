<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semilleros extends Model
{
    use HasFactory;

    protected $table = 'semilleros';

    protected $primaryKey = "idsemillero";

    protected $fillable = [
  
    'nombre_semillero',
    'fecha_de_inicio', 
    'objetivo',
    'idlinea',

    ];

}
