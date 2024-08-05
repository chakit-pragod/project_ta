<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTas extends Model
{
    use HasFactory;

    protected $fillable = [
        'ta_id',
        'course_id',
    ];

    public function tas()
    {
        return $this->hasOne(Tas::class);
    }

    public function courses()
    {
        return $this->hasOne(Courses::class);
    }
}
