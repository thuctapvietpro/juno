<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('cus_id');
            $table->string('cus_name',255);
            $table->string('cus_email',255);
            $table->string('password',255);
            $table->string('cus_avatar',255);
            $table->string('cus_phone',255);
            $table->string('cus_addr',255); 
            $table->integer('cus_role');
            $table->rememberToken();       
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
        Schema::dropIfExists('customers');
    }
}
