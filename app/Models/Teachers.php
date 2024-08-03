<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    /**

     *
     * @var array
     */
    protected $table = 'teachers';
    protected $fillable = [
        'prefix',
        'position',
        'degree',
        'name',
        'email',
        'user_id'
    ];
}