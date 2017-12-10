<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contact_section';

    protected $fillable=[
        'user_name','user_email','user_message','admin_location','admin_phone','admin_email',
    ];
}
