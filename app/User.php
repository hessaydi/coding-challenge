<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function likedPosts()
    {
        return $this->morphedByMany('App\Post', 'likeable')->whereDeletedAt(null);
    }
    public function getNameAttribute($value) {
        return ucfirst($value);
    }
}
