<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Roles;

class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName','user','email','photo', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function roles()
    {
        //relacion de muchos a muchos para la tabla roles
        return $this->belongsToMany(Roles::class);
    }


    /**
    * verifica que el rol sea valido
    */
    public function authorizeRole($role)
    {       
        if ($this->hasRole($role)) {
            return true;
        }

        abort(401, "Acceso denegado");
    }

    /**
    * Valida que el usuario tenga asignado un rol
    */
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }

        return false;
    }

     public function register()
    {
        //relacio de uno a muchos
        return $this->belongsTo(Registers::class);
    }



}
