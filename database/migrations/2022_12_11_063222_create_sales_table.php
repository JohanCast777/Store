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
        Schema::create('sales', function (Blueprint $table) {            
        $table->id();
        $table->unsignedBigInteger('id_custom');            
        $table->unsignedBigInteger('id_product');
        $table->unsignedBigInteger('id_worker');
        $table->timestamps('');
        $table->foreign('id_custom')->references('id')->on('customers');
        $table->foreign('id_product')->references('id')->on('products');
        $table->foreign('id_worker')->references('id')->on('workers');
        $table->boolean('confirmed')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
