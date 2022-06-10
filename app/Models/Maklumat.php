<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maklumat extends Model
{
    use HasFactory;

    protected $table = 'maklumat';

    // Mass assignment protection
    // $guarded
    protected $fillable = [
        'user_id',
        'kod',
        'keterangan',
        'amaun'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
