<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('produit', function($table)
            {
                $table->increments('idProduit');
                $table->date('date');
                $table->time('heure');
                $table->integer('valeurScan');
                $table->string('typeProduit', 250);
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('produit');
	}

}
