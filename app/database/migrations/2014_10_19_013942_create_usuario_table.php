<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up()
	{
		
		//schema: funcion que permite poder ejecutar comandos de bd a traves de la API de laravel
		//create: es para crear una tabla
		Schema::create('usuarios', function(Blueprint $table){
			//increments: crea nuestro campo primary key autoincrementable
			$table->increments('id');
			$table->string('name',255);
			$table->string('username',255)->unique();
			$table->string('email',255)->unique();//se le coloca los metodos que indica las caracteristicas de cada campo
			$table->string('password',60);
			$table->rememberToken()->nullable();//remenberToken es un alias que crea un string de 100 char que es para un token de auth
			$table->timestamps();//tiempo fecha y hora de cuando se cree algo en esta tabla
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('usuarios');
	}

}
