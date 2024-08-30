<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTas extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
    ];

    public function student()
    {
        return $this->hasOne(Students::class);
    }

    public function courses()
    {
        return $this->hasOne(Courses::class);
    }
}
