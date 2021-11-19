<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenment extends Model
{
    protected $fillable =['P1','P2','P3','P4','P5','P6'];
    protected $primaryKey = 'id_ev';
}
