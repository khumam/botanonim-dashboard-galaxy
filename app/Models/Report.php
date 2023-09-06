<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'reported_id',
        'reported_by',
        'reason',
        'created_at',
        'updated_at'
    ];
}
