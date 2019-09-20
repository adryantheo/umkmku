<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurnalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('jenis_transkasi');
            $table->String('akun_debit');
            $table->Double('nominal_debit');
            $table->String('akun_kredit');
            $table->Double('nominal_kredit');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('jurnals');
    }
}
