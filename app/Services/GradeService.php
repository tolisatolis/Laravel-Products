<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IService;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class GradeService implements IService
{
    public function create(Request $request): Grade
    {
        $grade = Grade::create($request->all());
        return $grade;
    }
    public function getAll(): LengthAwarePaginator
    {
        $grade = Grade::paginate(10);
        return $grade;
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
}
