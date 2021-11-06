<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investigadores extends Model
{
    //
    protected $table = 'investigadores';

    protected $primaryKey = "idinv";

    protected $fillable = [
  
        'ccInvest',
        'idtipoDoc',
        'nombre_completo',
        'genero',
        'estado_civil',
        'fecha_de_nacimiento',
        'idpais',
        'direccion',
        'telefono_celular',
        'email_personal',
        'idestado_inv',
        'idclasificacion_inv',
        'codigo_orcid',
        'H5',
        'url_google_scholar',
        'autor_id_scopus',
        'researchgate',
        'researcherid',
        'tutor',
        'url_cvlac',
    ];      
    public function clasificacion_inv()
{
    return $this->hasOne(Clasificacion_Inv::class);
   
} 
  
}
