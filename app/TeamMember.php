<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'title',
        'linkedin',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
}
