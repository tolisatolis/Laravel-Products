<?php

namespace App\Rules;

use App\Models\Grade;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class GradeRule implements ValidationRule
{
    /**
     * Create a new rule instance.
     *
     * @param $param
     */
    public function __construct($gradingSystem)
    {
        $this->gradingSystem = $gradingSystem;
    }
    public $gradingSystem;
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $gradingSystemofGrade = Grade::whereId($value)->first();
        if ($gradingSystemofGrade->grading_system_id != $this->gradingSystem) {
            $fail('Grade Does not match the grading system');
        }
    }
}
