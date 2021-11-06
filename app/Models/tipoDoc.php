<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoDoc extends Model
{
    use HasFactory;

    protected $table = 'tipo_docs';

    protected $primaryKey = "idtipoDoc";

    protected $fillable = [

    'nombreDocumento','updated_at','created_at'
   
    ];

}
