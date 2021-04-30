<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
