<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {   
        // dd($value);

        if($value) { 
            return asset($value);
        }else{
            return asset('avatars/default-image.png');
        }
    }

    public function timeline()
    {
        $ids = $this->follows()->pluck('users.id');
        $ids->push($this->id);
        $tweets = Tweet::whereIn('user_id', $ids)->latest()->get();
        return $tweets;
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function is_following(User $user){

        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function toggle_follow(User $user){

        if($this->is_following($user)){
           
            $this->unfollow($user);
 
        }
        else{

            $this->follow($user);
        }
    }

    public function unfollow(User $user){
        
        return $this->follows()->detach($user);

    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path(){
        return route('profile', $this->username);
    }

    // public function getRouteKeyName()
    // {
    //     return ('name');
    // }
}
