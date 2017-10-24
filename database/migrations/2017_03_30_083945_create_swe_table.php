<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSweTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',100)->unique();
            $table->integer('contact');
            $table->string('batch');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('swe');
    }
}
