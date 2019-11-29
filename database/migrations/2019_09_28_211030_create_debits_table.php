<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debits', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->String('akun_debit');
            $table->double('nominal_debit');
            $table->unsignedInteger('transaksi_id');
            $table->unsignedInteger('kode_akun_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('debits');
    }
}
