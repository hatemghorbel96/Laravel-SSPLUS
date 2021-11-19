<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable =['Prenom','Nom','Email','Telephone','dateNais','Fonction','Commentaire'];
    protected $primaryKey = 'id_emp';

    public function interventions()
    {
        return $this->hasMany('App\Intervention');
    }

}
