<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $percentage
 * @property string $type
 */

class Skill extends Model
{
    protected $fillable = [
        'name',
        'percentage',
        'type'
    ];
}
