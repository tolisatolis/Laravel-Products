<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'grading_system_id'
    ];
    public $timestamps = true;
    public function grading_system(): BelongsTo
    {
        return $this->belongsTo(GradingSystem::class);
    }
}
