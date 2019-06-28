<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->timestamps();

        });

        Schema::table('category_hotel', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->foreign('hotel_id')
                ->references('id')
                ->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_hotel');
    }
}
