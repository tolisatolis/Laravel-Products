<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name', 'grading_system_id'
    ];
    public $timestamps = true;
}
