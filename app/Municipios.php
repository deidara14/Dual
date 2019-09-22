<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'municipios';
    protected $primaryKey='id_municipio';
    protected $fillable=['descripcion_mun'];
}
