<?php

namespace App\Models;

use App\Traits\NameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, NameSlug;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'old_price',
        'sku',
        'description',
        'information',
        'new',
        'hot',
        'image'
    ];

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class);
    }
}




