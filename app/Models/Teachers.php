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

    /**
     * Get the user that owns the employee.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function curriculums()
    {
        return $this->hasOne(Curriculums::class);
    }
    
}