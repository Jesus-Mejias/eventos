<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    //
     protected $fillable = [
        'title', 'room','speaker','id_event',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
}
