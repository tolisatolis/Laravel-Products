<?php

namespace App\Http\Requests;

class StoreGradeRequest extends FormRequestBase
{
    public function rules(): array
    {
        $rules = parent::rules();
        return array_merge(
            $rules,
            [
                'grading_system_id' => 'required',
            ]
        );
    }
}
