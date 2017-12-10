<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $table= 'campaign_section';

    protected $uploads = '/images/';

    protected $fillable=[

        'campaign_name','campaign_description','campaign_featured_picture',
    ];

    public function getFileAttribute($campaigns){
        
        
        
        
                return $this->uploads . $campaigns;


        
        
            }


}
