<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //
    protected $table= 'donor_section';

    protected $fillable = [
        'donor_name','donor_amount','donor_info','donor_picture',
    ];
}


