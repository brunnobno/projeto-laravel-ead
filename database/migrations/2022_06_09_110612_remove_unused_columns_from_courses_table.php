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
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'price',
                'discount',
                'discount_type',
                'will_start_in',
                'will_end_in',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('discount_type')->default('percent'); //percent|value
            $table->dateTime('will_start_in')->nullable();
            $table->dateTime('will_end_in')->nullable();
        });
    }
};
