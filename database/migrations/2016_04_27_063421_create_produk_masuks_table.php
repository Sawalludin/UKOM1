<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukMasuksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk_masuks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode');
			$table->string('nama_produk');
			$table->string('info_produk');
			$table->integer('stok');
			$table->integer('harga_beli');
			$table->integer('harga_jual');
			$table->string('username_pemasuk');
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
		Schema::drop('produk_masuks');
	}

}
