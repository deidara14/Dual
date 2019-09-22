<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinadores extends Model
{
    protected $table = 'coordinadores';
    protected $primaryKey='id_coordinador';
    protected $fillable=['nombre_c','ap_c','am_c','id_genero','id_user','telefono'];

    function getSexo()
    {
        return $this->hasMany('App\Sexos','id_sexo','id_genero');
    }
}
