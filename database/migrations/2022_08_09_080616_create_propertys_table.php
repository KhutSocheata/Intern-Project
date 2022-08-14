<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');           
            $table->integer('bed');
            $table->integer('bathroom');
            $table->string('size');
            $table->float('price', 8, 2);
            $table->string('image');
            $table->string('type'); 
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propertys');
    }
};