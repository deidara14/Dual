<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey='id_alumno';
    protected $fillable=['nombre_a','ap_a','am_a','id_sexo','fecha_nac','id_carrera','id_semestre','id_domicilio','id_municipio','telefono','id_institucion','estatus'];

    function getSexo()
    {
        return $this->hasMany('App\Sexos','id_sexo','id_sexo');
    }

    function getCarrera()
    {
        return $this->hasMany('App\Carreras','id_carrera','id_carrera');
    }

    function getSemestre()
    {
        return $this->hasMany('App\Semestres','id_semestre','id_semestre');
    }

    function getDomicilio()
    {
        return $this->hasMany('App\Domicilios','id_domicilio','id_domicilio');
    }

    function getMunicipio()
    {
        return $this->hasMany('App\Municipios','id_municipio','id_municipio');
    }

    function getInstitucion()
    {
        return $this->hasMany('App\Instituciones','id_institucion','id_institucion');
    }
}
