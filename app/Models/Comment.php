<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $appends = ['date'];

    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'name',
        'email',
        'message',
        'rating'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function getdateAttribute(): string
    {
        $time =  date('d M, Y h:i A', strtotime($this->created_at));
        return ( $time);
    }



}
