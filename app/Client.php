<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =['Login','Pass','prenom','nom','email','Identifion','Telephone','Societe','Commentaire'];

    public function interventions()
    {
        return $this->hasMany('App\Intervention');
    }

    public function contrats()
    {
        return $this->hasMany('App\Contrat');
    }

    public function reclamations()
    {
        return $this->hasMany('App\Reclamation');
    }

    public function fichiers()
    {
        return $this->hasMany('App\Fichier');
    }
}

