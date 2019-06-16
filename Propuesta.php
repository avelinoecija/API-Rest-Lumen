<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
     public function usuarios(){
		return $this->hasMany('App\Usuario');
	}
     public function votos(){
		return $this->hasMany('App\Voto');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}
}