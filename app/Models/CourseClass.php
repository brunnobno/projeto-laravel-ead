<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'slug';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'small_description',
        'long_description',
        'slug',
        'cover_image',
        'status',
        'price',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'location',
        'online',
        'active',
        'course_id',
    ];

    protected $casts = [
        'online'        => 'boolean',
        'active'        => 'boolean',
        'start_date'    => 'date',
        'end_date'      => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)
                ->where('end_date', '>=', now());
    }
}
