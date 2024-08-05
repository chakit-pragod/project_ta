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
        'subjects_id',
        'owner_teacher_id',
        'semesters_id',
        'major_id',
        'cur_id',
    ];

    public function subjects()
    {
        return $this->belongsTo(Subjects::class);
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
}
