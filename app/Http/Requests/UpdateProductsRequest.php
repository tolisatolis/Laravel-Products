<?php

namespace App\Http\Requests;

use App\Rules\GradeRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return
            [
                'grading_system_id' => 'required|exists:grading_systems,id',
                'grade_id' => ['required', 'exists:grades,id', new GradeRule($this->grading_system_id)],
                'drying_method_id' => 'required|exists:drying_methods,id',
                'species_id' => 'required|exists:species,id',
                'thickness' => 'required|numeric|min:1',
                'width' => 'required|numeric|min:1',
                'length' => 'required|numeric|min:1',
            ];
    }
}
