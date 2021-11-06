<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasificacion_inv extends Model
{
    //use HasFactory;
    protected $table = 'clasificacion_invs';

    protected $primaryKey = "idclasificacion_inv";

    protected $fillable = [
  
    'nombreClasificacion',
    ];
    public function investigadores(){
        return $this->belongsTo(Investigadores::class);
    }
}
