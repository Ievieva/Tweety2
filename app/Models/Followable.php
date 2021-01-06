<?php


namespace App\Models;

trait Followable
{

    public function follow(User $user): \Illuminate\Database\Eloquent\Model
    {
        return $this->follows()->save($user);
    }

    public function follows(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function following(User $user): bool
    {
        return $this->follows->contains($user);
    }

    public function unfollow(User $user): int
    {
        return $this->follows()->detach($user);

    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }
}
