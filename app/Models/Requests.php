<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $fillable = [
        'student_id',
        'course_id',
        'approved_at',
        'comment',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(CourseTas::class, 'student_id', 'student_id');
    }

    /**
     * Get the course associated with the request from course_tas.
     */
    public function course()
    {
        return $this->belongsTo(CourseTas::class, 'course_id', 'course_id');
    }
}
