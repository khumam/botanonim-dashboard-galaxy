<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveChat extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_id',
        'to_id',
        'status',
        'created_at',
        'updated_at'
    ];
}
