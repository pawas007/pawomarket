<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
