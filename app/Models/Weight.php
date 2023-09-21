<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight',
        'date',
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
    ];
}
