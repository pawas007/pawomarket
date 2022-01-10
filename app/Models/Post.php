<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

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


}
