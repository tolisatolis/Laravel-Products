<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'thickness',
        'length',
        'width',
        'species_id',
        'treatment_id',
        'drying_method_id',
        'grading_system_id',
        'grade_id',
    ];

    public $timestamps = true;
    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class);
    }
    public function grading_system(): BelongsTo
    {
        return $this->belongsTo(GradingSystem::class);
    }
    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
    public function dryingMethod(): BelongsTo
    {
        return $this->belongsTo(DryingMethod::class);
    }
    public function treatment(): BelongsTo
    {
        return $this->belongsTo(Treatment::class);
    }
}
