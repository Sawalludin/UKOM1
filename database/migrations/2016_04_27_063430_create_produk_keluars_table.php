<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukKeluarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk_keluars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode');
			$table->string('nama_produk');
			$table->string('info_produk');
			$table->integer('jumlah_keluar');
			$table->string('username_pengeluar');
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
		Schema::drop('produk_keluars');
	}

}
