<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinternos extends Model
{
    protected $table = 't_internos';
    protected $primaryKey='id_tutorint';
    protected $fillable=['nombre_ti','ap_ti','am_ti','id_genero','id_user','telefono'];

    function getSexo()
    {
        return $this->hasMany('App\Sexos','id_sexo','id_genero');
    }


}
