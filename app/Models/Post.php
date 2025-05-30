<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model

{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->morphOne(Comment::class ,'commentable');
    }
    public function comments(){
        return $this->morphMany(Comment::class ,'commentable');
    }
    public function tags(){
        return $this->morphToMany(Tag::class ,'taggable');
    }
}
