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
        'vendor_code',
        'old_price',
        'description',
        'information',
        'new',
        'hot',
    ];


    public function getPriceAttribute($value)
    {
        return CurrencyConversion::convert($value);
    }

    public function getOldPriceAttribute($value)
    {
        return $value ? CurrencyConversion::convert($value) : null;
    }





    public function gallery()
    {
        return $this->hasMany(ProductGallery::class);

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




