<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id_achat');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_crypto'); 
            $table->float('quantity');
            $table->float('price');
            $table->date('date_achat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
