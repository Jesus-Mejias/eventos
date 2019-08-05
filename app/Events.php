<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
     protected $fillable = [
        'title', 'description','date','time','duration', 'location','price','capacity','id_user','id_event',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function register()
      //relacion de muchos a muchos--------------
    {
        return $this->belongsTo(Registers::class);
    }
     public function sessions()
      //relacion de uno a muchos--------------
    {
        return $this->belongsTo(Sessions::class);
    }
     public function ratings()
      //relacion de muchos a uno--------------
    {
        return $this->belongsTo(Ratings::class);
    }
}
