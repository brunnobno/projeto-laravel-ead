<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'slug',
        'long_description',
        'banner_source_type',
        'banner_src',
        'price',
        'discount',
        'discount_type',
        'will_start_in',
        'will_end_in',
        'price_card',
        'day_and_time',
        'teacher',
        'status_course',
    ];

    protected $casts = [
        'will_start_in' => 'datetime',
        'will_end_in' => 'datetime',
    ];
}
