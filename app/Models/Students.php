<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'student_id',
        'fName',
        'lName',
        'card_id',
        'phone',
        'email',
        'user_id',
        'subjects_id',
        'type_ta',
        'uploadfile',
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subjects::class);
    }

    public function tas()
    {
        return $this->hasMany(Tas::class);
    }
}
