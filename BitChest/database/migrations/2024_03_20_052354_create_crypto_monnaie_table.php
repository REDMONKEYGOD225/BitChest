<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoMonnaieTable extends Migration
{
    public function up()
    {
        Schema::create('crypto_monnaie', function (Blueprint $table) {
            $table->increments('id_crypto');
            $table->string('name');
            $table->string('symbole');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crypto_monnaie');
    }
}
