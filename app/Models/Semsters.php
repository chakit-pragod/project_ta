<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semsters extends Model
{
    use HasFactory;

    /**

     *
     * @var array
     */
    protected $table = 'semsters';
    protected $fillable = [
        'name_th',
        'name_en',
        'head_teacher_id',
    ];

    
}