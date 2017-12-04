<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('about_section', function (Blueprint $table) {
            $table->increments('id');
            $table->text('introduction_content');
            $table->text('implementation_content');
            $table->text('sponsorship_content');
            $table->text('executive_summary_content');
            $table->text('mission_content');
            $table->text('vision_content');
            $table->text('goal_content');

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
        
        
        Schema::dropIfExists('about_section');
        
        
    }
}
