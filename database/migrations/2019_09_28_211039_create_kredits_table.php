<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('akun_kredit');
            $table->double('nominal_kredit');
            $table->unsignedInteger('transaksi_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kredits');
    }
}
