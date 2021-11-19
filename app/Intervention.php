<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
use App\Employer;
class Intervention extends Model
{


    protected $fillable =['id','Titre','id_emp','dateD','dateF','dateR','Color','Etat','Commentaire'];
    protected $primaryKey = 'id_inter';

    public function clients (){
        return $this->belongsTo('App\Client','id');
    }

    public function employers (){
        return $this->belongsTo('App\Employer','id_emp');
    }
    public function fichiers()
    {
        return $this->hasMany('App\Fichier');
    }
}
