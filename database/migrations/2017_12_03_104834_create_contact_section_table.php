<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('contact_section', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->text('user_message');
            $table->string('admin_location');
            $table->integer('admin_phone');
            $table->string('admin_email')->unique();
            //
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
        
        Schema::dropIfExists('contact_section');
        
    }
}
