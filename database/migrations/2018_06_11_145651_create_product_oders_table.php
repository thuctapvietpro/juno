<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_oder', function (Blueprint $table) {
            $table->integer('prod_id')->unsigned();
            $table->foreign('prod_id')
                  ->references('prod_id')
                  ->on('product')
                  ->onDelete('cascade');
            $table->integer('oder_id')->unsigned();
            $table->foreign('oder_id')
                  ->references('oder_id')
                  ->on('oders')
                  ->onDelete('cascade');
            $table->integer('qty');
            $table->integer('price');
            $table->text('options');
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
        Schema::dropIfExists('product_oders');
    }
}
