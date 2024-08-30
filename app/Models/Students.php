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
        'prefix',
        'fName',
        'lName',
        'card_id',
        'phone',
        'email',
        'user_id',
        'subject_id',
        'type_ta',
        'bookbank_id',
        'bank_name',
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

    public function student()
    {
        return $this->hasMany(Students::class);
    }
}
