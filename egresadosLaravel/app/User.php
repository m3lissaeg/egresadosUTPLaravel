<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','dni','address','phone','birthday','genero', 'egreso',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //role relatioship
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    
    //validate if the user has an specific role
    public function hasRole($role){
        if ($this->roles()->where('name', $role)->first()){
            return true ;
        }
        return false ;
    }


    public function news(){
        return $this->hasMany('App\News');
    }

    public function friend(){
        return $this->belongsToMany('App\Friend');
    }


    public function messages(){

        return $this->hasMany(Chat::class);
        
    }
}
