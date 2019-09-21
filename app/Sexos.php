<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{
    protected $table = 'sexos';
    protected $primaryKey='id_sexo';
    protected $fillable=['descripcion'];
}
