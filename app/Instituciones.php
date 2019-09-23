<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituciones extends Model
{
    protected $table = 'instituciones';
    protected $primaryKey='id_institucion';
    protected $fillable=['descripcion','domicilio'];
}
