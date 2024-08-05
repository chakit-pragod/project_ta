<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursements extends Model
{
    use HasFactory;

    protected $table = 'disbursements';

    protected $fillable = [
        'bookbank_id',
        'bank_name',
        'uploadfile',
        'ta_id'
    ];

    public function tas()
    {
        return $this->belongsTo(Tas::class);
    }
}
