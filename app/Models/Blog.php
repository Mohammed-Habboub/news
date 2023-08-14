<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');
    }

    // Many to Many
    public function likedUsers()
    {
        return $this->BelongsToMany(User::class)->withTimestamps();
    }

}
