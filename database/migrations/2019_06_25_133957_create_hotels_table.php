<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deparment_id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->foreign('deparment_id')
                ->references('id')
                ->on('deparments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
