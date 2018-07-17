<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_name',255);
            $table->string('prod_code',255);
            $table->longText('prod_des');
            $table->integer('prod_price');
            $table->integer('prod_regular_price');
            $table->integer('prod_sale_price');
            $table->integer('prod_cate')->unsigned();
            $table->foreign('prod_cate')
                    ->references('cate_id')
                    ->on('categorys')
                    ->onDelete('cascade');
            $table->string('prod_thumbnail',255);
            $table->string('prod_type',255);
            $table->string('prod_status',255);
            $table->integer('prod_parent');
            $table->integer('prod_value_id');
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
        Schema::dropIfExists('products');
    }
}
