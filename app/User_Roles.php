<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Roles extends Model
{
    //
     protected $fillable = [
        'id_user','id_role',
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
