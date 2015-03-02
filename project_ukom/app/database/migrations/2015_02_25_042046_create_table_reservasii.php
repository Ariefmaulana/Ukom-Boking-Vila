<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservasii extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservasis', function(Blueprint $table)
        {
        $table->increments('id');
        $table->string('namavila');        
        $table->string('checkin');
        $table->string('checkout');
        $table->string('noktp');
        $table->string('notelepon');
        $table->string('email');
        $table->string('alamat');
        $table->string('namadepan');
        $table->string('namabelakang');
        $table->string('kotaasal');
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
		Schema::drop("reservasis");
	}

}
