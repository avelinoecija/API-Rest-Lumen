<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
     public function votos(){
		return $this->hasMany('App\Voto');
	}
     public function propuestas(){
		return $this->hasMany('App\Propuesta');
	}	
	public function user(){
		return $this->belongsTo('App\User');
	}
}