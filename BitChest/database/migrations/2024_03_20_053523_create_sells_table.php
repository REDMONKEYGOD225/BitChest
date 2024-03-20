<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    public function up()
    {
        Schema::create('sell', function (Blueprint $table) {
            $table->increments('id_sell');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_crypto'); 
            $table->float('quantity');
            $table->float('price');
            $table->date('date_sell');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sell');
    }
}
