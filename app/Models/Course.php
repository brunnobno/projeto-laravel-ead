<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'title',
        'slug',
        'long_description',
        'banner_source_type',
        'banner_src',
        'active',
    ];

    protected $casts = [
        'will_start_in' => 'datetime',
        'will_end_in' => 'datetime',
        'active' => 'boolean',
    ];

    /**
     * Get all of the classes for the Course
     */
    public function classes()
    {
        return $this->hasMany(CourseClass::class);
    }
}
