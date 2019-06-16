<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{

	protected $fillable = [
        'idusuario', 'idpropuesta', 'voto',
    ];

    public function usuarios(){
		return $this->hasMany('App\Usuario');
	}
    public function propuestas(){
		return $this->hasMany('App\Propuesta');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}

	public function publish(Post $post)
{
    	$this->posts()->save($post);
}
}