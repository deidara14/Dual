<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texternos extends Model
{
    protected $table = 't_externos';
    protected $primaryKey='id_tutorext';
    protected $fillable=['nombre_te','ap_te','am_te','id_genero','id_user','telefono'];

    function getSexo()
    {
        return $this->hasMany('App\Sexos','id_sexo','id_genero');
    }
}
