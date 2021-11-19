<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    protected $fillable =['id_inter','titre','TypeF','fichAv'];
    protected $primaryKey = 'id_Fichier';

    public function interventions()
    {
        return $this->belongsTo('App\Intervention','id_inter');
    }

}
