<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Post extends Ardent implements UserInterface, RemindableInterface {
	
	use UserTrait, RemindableTrait;

	protected $table = 'posts';//Aqui se le indica el nombre de la tabla si no se sigue la convencion

	protected $primaryKey='id';//Aqui se le indica el primary key de no se "ID"
	
	/**
	 * Ardant validation rules
	 *
	 * @var array
	 */	
	public static $rules= array(
		/*"=>'required" estas ccaracterisitecas hacen que el ardent valide desde aqui en el model y no en el controler */
		'usuario_id'	=> 'required|exists:usuarios,id',
		'text' =>'max:160' , 
	);

	public function usuario(){
		/* si no se sigue la convencion se usa como segundo parametro el nombre del campo y
		de tercero la clave local*/
		return $this->belongsTo('Usuario',/*nombr del campo de relacion en esta tabla*/'usuarios_id',/*nombr campo de ralacion en tabla a la que ir*/'id');
	}
	public function likedBy()
	{
		return $this->belongsToMany('Usuario');
	}
	// protected $fillable = [];

}