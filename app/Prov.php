<?php

namespace AppStitch;

use Illuminate\Database\Eloquent\Model;

class Prov extends Model
{
    protected $table = 'provs';

    protected $fillable = ['id', 'nomContacto','razonSocial','telfProv','provProv','locProv','dirProv','cpProv',
        'emailProv'];
}
