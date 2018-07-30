<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->string('brand');
            $table->string('model');
            $table->string('cpu');
            $table->integer('price');
            $table->string('memory')->nullable();
            $table->string('hardisk')->nullable();
            $table->string('display')->nullable();
            $table->string('battery')->nullable();
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('items', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branch')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
