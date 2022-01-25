<?php

namespace App\Models;

use App\Traits\NameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory,NameSlug;
    public $timestamps = false;

//    const ATTRIBUTE_TYPE_ID = 1;
//    const ATTRIBUTE_CATEGORIES_ID = 2;
//    const ATTRIBUTE_SIZE_ID = 3;
//    const ATTRIBUTE_BRAND_ID = 4;
//    const ATTRIBUTE_COLOR_ID = 5;




    protected $fillable = ['name','slug'];

    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

}
