<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registors extends Model
{
    //

   protected $fillable = [
        'rating', 'user_id','id_event',
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
