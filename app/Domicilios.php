<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilios extends Model
{
    protected $table = 'domicilios';
    protected $primaryKey='id_domicilio';
    protected $fillable=['descripcion'];
}
