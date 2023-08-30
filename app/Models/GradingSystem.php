<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GradingSystem extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public $timestamps = true;
    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
