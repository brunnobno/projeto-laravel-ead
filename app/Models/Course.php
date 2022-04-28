<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'small_description',
        'long_description',
        'banner_source_type',
        'banner_src',
        'price',
        'discount',
        'discount_type',
        'will_start_in',
        'will_end_in',
    ];
}
