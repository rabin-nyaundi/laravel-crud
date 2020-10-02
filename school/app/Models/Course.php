<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    public $timestamps = true;

    protected $fillable = [
        'course_name',
        'course_teacher',
        'no_of_hours'
    ];
}
