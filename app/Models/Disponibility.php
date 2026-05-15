<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $description
 * @property string $badges
 * @property string $link
 */

class Disponibility extends Model
{
    protected $fillable = [
        'description',
        'badges',
        'link',
    ];
}
