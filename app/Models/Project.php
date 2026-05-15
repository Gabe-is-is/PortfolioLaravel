<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property string $name
 * @property string $description
 * @property string $link_demo
 * @property string $link_code
 */
class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'link_demo',
        'link_code',
    ];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageble');
    }
}
