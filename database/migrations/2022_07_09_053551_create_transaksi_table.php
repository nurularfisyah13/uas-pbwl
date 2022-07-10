<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('barang_transaksi');
            $table->unsignedBigInteger('pembeli_transaksi');
            $table->integer('qty_transaksi');
            $table->integer('status_transaksi')->default(1);
            $table->timestamps();
            $table->foreign('barang_transaksi')
                ->references('id_barang')
                ->on('barang');
            $table->foreign('pembeli_transaksi')
                ->references('id_pembeli')
                ->on('pembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
