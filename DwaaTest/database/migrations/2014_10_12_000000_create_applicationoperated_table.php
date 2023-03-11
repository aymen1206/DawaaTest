<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationOperatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationoperated', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appID');
            $table->integer('CoordinatorAcception');
            $table->integer('CoordinatorRejection');
            $table->integer('AdminAcception');
            $table->integer('AdminRejection');
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
        Schema::dropIfExists('applicationoperated');
    }
}
