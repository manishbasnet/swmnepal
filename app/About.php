<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $table = 'about_section';    
    //
    protected $fillable=[

        'introduction_content','implementation_content','sponsorship_content','executive_summary_content','mission_content','vision_content','goal_content',


    ];
}
