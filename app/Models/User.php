<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'avatar',
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

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()->get(); //->paginate(50);
    }

    public function tweets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getAvatarAttribute(?string $value = ''): string
    {
        return $value ? '/storage/' . $value : 'https://i.pravatar.cc/200?u=' . $this->email;
        //return $value ? asset($value) : '/images/default-avatar.jpeg';
    }

    public function setPasswordAttribute(string $value): void
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function path($append = ''): string
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}
