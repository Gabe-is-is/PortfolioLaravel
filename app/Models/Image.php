<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    protected $fillable = [
        'image',
        'alt',
    ];

    protected $appends = [
        'image_link'
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    protected function imageLink(): Attribute
    {
        return Attribute::make(
            get: fn () => asset('storage/' . $this->image)
        );
    }
}