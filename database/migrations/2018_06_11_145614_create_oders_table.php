<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->increments('oder_id');
            $table->string('oder_name',255);
            $table->string('oder_phone',255);
            $table->string('oder_email',255);
            $table->string('oder_address',255);
            $table->string('oder_status');
            $table->text('oder_note');
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
        Schema::dropIfExists('oders');
    }
}
