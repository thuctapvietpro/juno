<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_votes', function (Blueprint $table) {
            $table->integer('prod_id')->unsigned();
            $table->foreign('prod_id')
                  ->references('prod_id')
                  ->on('product')
                  ->onDelete('cascade');
            $table->integer('vote_id')->unsigned();
            $table->foreign('vote_id')
                  ->references('vote_id')
                  ->on('votes')
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
        Schema::dropIfExists('product_votes');
    }
}
