<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait TitleSlug
{
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value,'-');
    }
}
