<?php

namespace App\Models;

use App\Http\Services\CurrencyConversion;
use App\Http\Services\CurrencyProvider;
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

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class)->with('attribute');

    }

    public function getPriceAttribute($value)
    {
        return  CurrencyConversion::convert($value);
    }

    public function getCurrencySymbolAttribute()
    {
        return CurrencyProvider::getCurrencyesSymbol();
    }






}




