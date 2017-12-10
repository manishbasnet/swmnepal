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






            // for image uploads

             protected $table = 'campaign_images';
    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];

    public static $messages = [
        'file.mimes' => 'Uploaded file is not in image format',
        'file.required' => 'Image is required'
    ];





}
