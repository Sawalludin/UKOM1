<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukPinjamenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk_pinjamen', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode');
			$table->string('nama_produk');
			$table->string('info_produk');
			$table->string('nama_peminjam');
			$table->integer('jumlah_pinjaman');			
			$table->string('tanggal_pengembalian');
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
		Schema::drop('produk_pinjamen');
	}

}
