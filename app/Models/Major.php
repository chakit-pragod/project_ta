<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    /**

     *
     * @var array
     */
    protected $table = 'major';
    protected $fillable = [
        'name_th',
        'name_en',
        'major_type',
        'cur_id',
    ];
}