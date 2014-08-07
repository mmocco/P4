<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainers', function($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('pic');
        $table->string('sport');
        $table->text('accomplishments');
        $table->text('experience');
        $table->timestamps();

       });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trainers');
	}

}
