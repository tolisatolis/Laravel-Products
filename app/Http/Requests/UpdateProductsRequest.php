<?php

namespace App\Http\Requests;

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
                'grading_system_id' => 'required',
                'grade_id' => 'required',
                'drying_method_id' => 'required',
                'species_id' => 'required',
                'treatment_id' => 'required',
                'thickness' => 'required|numeric|min:1',
                'width' => 'required|numeric|min:1',
                'length' => 'required|numeric|min:1',
            ];
    }
}
