<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $about_me
 * @property string $location
 * @property string $experience
 * @property string $education
 */
class About extends Model
{
    protected $fillable = [
        'about_me',
        'location',
        'experience',
        'education'
    ];
}