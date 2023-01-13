<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblStorage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_storage', function (Blueprint $table) {
            $table->id();
            $table->string('item_code')->unique();
            $table->string('item_name');
            $table->float('price');
            $table->string('remark');
            $table->string('status');
            $table->timestamp('item_create_at')->nullable();
            $table->rememberToken();
            


    
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
