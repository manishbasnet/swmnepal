<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallerySectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('gallery_section', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gallery_name');
            $table->date('galllery_date');
            $table->string('gallery_photo');
            $table->timestamps();
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
        
        Schema::dropIfExists('gallery_section');
        
    }
}
