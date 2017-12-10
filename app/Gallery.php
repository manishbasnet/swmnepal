<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    protected $table = 'gallery_section';

    protected $fillable = [
        'gallery_name','gallery_date','gallery_picture',
    ];
}
