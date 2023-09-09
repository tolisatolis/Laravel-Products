<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IModelService;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class GradeService implements IModelService
{
    public function create(Request $request): Grade
    {
        $grade = Grade::create($request->all());
        return $grade;
    }
    public function getAll(): LengthAwarePaginator
    {
        return Grade::with('grading_system')->paginate(10);
    }

    public function get($id): Grade
    {
        $grade = Grade::find($id);
        return $grade;
    }

    public function update($id, FormRequestBase $request)
    {
        $grade = Grade::find($id)->update($request->all());
        return $grade;
    }
    public function delete($id)
    {
        Grade::destroy($id);
    }
    public function getGradesByGradingSystem($id)
    {
        $grades = Grade::where('grading_system_id', $id)->get();
        return $grades;
    }
}
