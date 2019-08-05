<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	 protected $fillable = [
        'rating', 'id_event',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    //
    
}
