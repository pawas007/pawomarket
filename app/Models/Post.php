<?php

namespace App\Models;

use App\Traits\TitleSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory,TitleSlug;

    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'short_description'
    ];

    protected $appends = ['create'];
    public function getcreateAttribute(): string
    {
        $time =  date('d M Y', strtotime($this->created_at));
        return ( $time);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function categories()
    {
        return $this->belongsToMany(CategoryPost::class);
    }



}
