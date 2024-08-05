<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraAttendances extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail',
        'start_work',
        'duration',
        'class_type_id',
        'ta_id',
        'course_id',
    ];

    public function class_type()
    {
        return $this->hasOne(ExtraAttendances::class);
    }

    public function tas()
    {
        return $this->hasOne(Tas::class);
    }

    public function courses()
    {
        return $this->hasOne(Courses::class);
    }
}
