<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registeration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'faculty', 'facebook_link', 'phone', 'university', 'academic_year', 'why',
    ];
}
