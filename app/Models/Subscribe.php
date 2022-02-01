<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscribe extends Model
{
    use HasFactory;
    protected $fillable = ['email','active','id'];


    public $incrementing = false;

    protected $keyType = 'string';


    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $id = Str::uuid()->toString();
            $model->id = $id;

        });
    }



}
