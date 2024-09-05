<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'status',
        'subject_id',
        'owner_teacher_id',
        'semesters_id',
        'major_id',
        'cur_id',
    ];

    public function subjects()
    {
        return $this->belongsTo(Subjects::class, 'subject_id', 'subject_id');
    }

    public function teachers()
    {
        return $this->belongsTo(Teachers::class);
    }

    public function semesters()
    {
        return $this->belongsTo(Semesters::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
    
    public function curriculums()
    {
        return $this->belongsTo(Curriculums::class);
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }

    public function course_tas() 
    {
        return $this->hasMany(CourseTas::class);
    }

    public function course_teacher() 
    {
        return $this->hasMany(CourseTeacher::class);
    }

    public function extra_attendences()
    {
        // return $this->hasOne(ExtraAttendences::class);
    }
}
