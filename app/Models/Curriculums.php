<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculums extends Model
{
    use HasFactory;

    /**

     *
     * @var array
     */
    protected $table = 'curriculums';
    protected $fillable = [
        'name_th',
        'name_en',
        'head_teacher_id',
    ];

    /**
     * Get the user that owns the employee.
     */
    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function major()
    {
        return $this->belongsToMany(Major::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subjects::class);
    }

    public function curriculums_subjects()
    {
        return $this->belongsTo(CurriculumsSubjects::class);
    }

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }
}