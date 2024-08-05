<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tas extends Model
{
    use HasFactory;

    protected $table = 'tas';
    protected $fillable = [
        'student_id',
        'user_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function disbursements() 
    {
        return $this->belongsTO(Disbursements::class) ;   
    }

    public function course_ta() 
    {
        return $this->belongsTO(CourseTas::class) ;   
    }

    public function attendences()
    {
        return $this->hasMany(Attendences::class);
    }

    public function extra_attendences()
    {
        return $this->hasOne(ExtraAttendences::class);
    }

}
