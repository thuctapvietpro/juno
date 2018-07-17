<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_comments', function (Blueprint $table) {
            $table->integer('prod_id')->unsigned();
            $table->foreign('prod_id')
                  ->references('prod_id')
                  ->on('product')
                  ->onDelete('cascade'); 
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')
                  ->references('comment_id')
                  ->on('comments')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('product_comments');
    }
}
