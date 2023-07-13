<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['*'];

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'event_tag',
            'event_id',
            'tag_id',
            'id',
            'id'
        );
    }
}
