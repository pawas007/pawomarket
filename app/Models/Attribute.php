<?php

namespace App\Models;

use App\Traits\NameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory,NameSlug;
    public $timestamps = false;
        protected $fillable = ['product_id','attributes'];


}
