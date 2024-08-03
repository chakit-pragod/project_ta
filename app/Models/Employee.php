<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**

     *
     * @var array
     */
    protected $table = 'employee';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'user_id',
    ];
}