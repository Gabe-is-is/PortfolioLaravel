<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $location
 * @property string $email
 * @property string $phone
 * @property string $schedule
 */

class Contactinfo extends Model
{
    protected $fillable = [
        'location',
        'email',
        'phone',
        'schedule',
    ];
}
