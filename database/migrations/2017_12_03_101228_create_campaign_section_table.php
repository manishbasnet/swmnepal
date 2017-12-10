<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('campaign_section', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campaign_name', 100);
            $table->text('campaign_description');
            $table->string('campaign_featured_picture');
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
        
        Schema::dropIfExists('campaign_section');
        
    }
}
