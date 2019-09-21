<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestres extends Model
{
    protected $table = 'semestres';
    protected $primaryKey='id_semestre';
    protected $fillable=['descripcion_semestre'];
}
