<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'password',
        'name',
        'account',
        'per_page'

    ];
}
