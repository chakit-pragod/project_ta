<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    use HasFactory;

    /**

     *
     * @var array
     */
    protected $table = 'semesters';
    protected $fillable = [
        'year',
        'semesters',
        'start_date',
        'end_date'
    ];

    
}