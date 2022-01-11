<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'name',
        'email',
        'message',
    ];



    public function commentable()
    {
        return $this->morphTo();
    }



}
