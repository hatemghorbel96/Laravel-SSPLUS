<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable =['id','Title','Debut','Fin','Duree','Budget','Commentaire','fich'];
    protected $primaryKey = 'id_contrat';

    public function clients (){
        return $this->belongsTo('App\Client','id');
    }
}
