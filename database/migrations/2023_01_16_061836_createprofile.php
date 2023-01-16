<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createprofile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('address');
            $table->string('hobby1')->nullable();
            $table->string('hobby2')->nullable();
            $table->string('hobby3')->nullable();
            $table->string('hobby4')->nullable();
            $table->string('hobby5')->nullable();
            $table->string('hobby6')->nullable();
            $table->string('name1');
            $table->string('email1');
            $table->string('phone1');
            $table->string('address1');
            $table->integer('progressvalue');
            $table->integer('progressvalue2');
            $table->integer('progressvalue3');
            $table->integer('progressvalue4');
            $table->integer('progressvalue5');
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
        //
    }
}
