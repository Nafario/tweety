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
    protected $fillable = [
        'avatar',
        'username',
        'name',
        'email',
        'password',
    ];

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
    public function timeline(){
        $friends = $this->follows->pluck('id');
        return Tweet::whereIn('user_id', $friends)
        ->orWhere('user_id', $this->id)
        ->withLikes()->latest()->paginate(50);
    }
    public function tweets(){
        return $this->hasMany(Tweet::class);
    }
    public function follow(User $user){
        return $this->follows()->save($user);
    }
    public function unfollow(User $user){
        return $this->follows()->detach($user);
    }
    public function toggleFollow(User $user){
        $this->follows()->toggle($user);
    }
    public function follows(){
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }
    
    public function following(User $user){
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
    public function getAvatarAttribute($value)
    {
       return $value ? asset('storage/' . $value ) : asset('imgs/default-profile.jpg');
    }
    public function path($append = ''){
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $append;
    }
}