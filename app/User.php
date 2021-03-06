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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/40?u=".$this->email;
    }



    public function timeline()
    {

        // to the get the all for all users latest tweets first
        //    return Tweet::latest()->get();

        //get tweets per user
        return Tweet::where('user_id', $this->id)->latest()->get();
    }


    public function tweets()
    {
        // 
        return $this->hasMany(Tweet::class);
    }


    public function follow(User $user)
    {
        // to save action to follow  
        return $this->follows()->save($user);
    }


    public function follows()
    {
        // you can be explicit with the table which it assumes to have the many-to-many
        // table_name , primary key , foreign key
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

}
