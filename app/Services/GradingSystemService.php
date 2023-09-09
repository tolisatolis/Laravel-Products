<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IModelService;
use App\Models\GradingSystem;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class GradingSystemService implements IModelService
{
    public function create(Request $request): GradingSystem
    {
        $gradingSystem = GradingSystem::create($request->all());
        return $gradingSystem;
    }
    public function getAll(): LengthAwarePaginator
    {
        $gradingSystem = GradingSystem::paginate(10);
        return $gradingSystem;
    }

    public function get($id): GradingSystem
    {
        $gradingSystem = GradingSystem::find($id);
        return $gradingSystem;
    }

    public function update($id, FormRequestBase $request)
    {
        $gradingSystem = GradingSystem::find($id)->update($request->all());
        return $gradingSystem;
    }
    public function delete($id)
    {
        GradingSystem::destroy($id);
    }
}
