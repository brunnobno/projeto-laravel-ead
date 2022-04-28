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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('small_description');
            $table->longText('long_description');
            $table->string('banner_source_type')->nullable()->default('internal'); //internal|external
            $table->string('banner_src')->nullable();
            $table->string('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('discount_type')->default('percent'); //percent|value
            $table->dateTime('will_start_in')->nullable();
            $table->dateTime('will_end_in')->nullable();
            $table->index([
                'slug',
                'price',
                'will_start_in',
                'will_end_in',
                'id',
            ]);
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
        Schema::dropIfExists('courses');
    }
};
