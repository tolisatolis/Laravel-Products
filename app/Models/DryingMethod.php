<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DryingMethod extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public $timestamps = true;
}
