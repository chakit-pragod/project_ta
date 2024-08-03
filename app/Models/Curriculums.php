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
}