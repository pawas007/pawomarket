<?php

namespace App\Models;

use App\Http\Services\CurrencyConversion;
use App\Traits\NameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, NameSlug;

    protected $appends = ['currency_symbol'];

    protected $fillable = [
        'name',
        'slug',
        'price',
        'sku',
        'description',
        'information',
        'new',
        'hot',
        'image'
    ];


    public function getPriceAttribute($value)
    {
        return CurrencyConversion::convert($value);
    }

    public function getOldPriceAttribute($value)
    {
        return $value ? CurrencyConversion::convert($value) : null;
    }

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class)->with('attribute');

    }

    public function getCurrencySymbolAttribute()
    {
        return session('currency_symbol');
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}




