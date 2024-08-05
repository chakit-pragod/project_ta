<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subjects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name_th',
        'name_en',
        'credits',
        'weight',
        'detail',
        'cur_id',
        'status',
    ];

    /**
     * Get the curriculum that owns the subject.
     */
    public function curriculums()
    {
        return $this->belongsTo(Curriculums::class);
    }

    public function curriculums_subjects()
    {
        return $this->hasMany(CurriculumsSubjects::class);
    }

    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
