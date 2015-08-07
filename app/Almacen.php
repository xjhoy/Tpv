<?php

namespace AppStitch;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacens';

    protected $fillable = ['id', 'nomProd', 'uniProd','precioProd','ivaProd','netoProd','idMprod','favProd'];
}
