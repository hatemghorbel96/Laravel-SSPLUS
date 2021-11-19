<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
class Reclamation extends Model
{
    protected $fillable =['Type','comment','id'];
    protected $primaryKey = 'id_rec';
    
    public function client (){
        return $this->belongsTo('App\Client','id');
    }
}
