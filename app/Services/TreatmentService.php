<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IService;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class TreatmentService implements IService
{
    public function create(Request $request): Treatment
    {
        $treatment = Treatment::create($request->all());
        return $treatment;
    }
    public function getAll(): LengthAwarePaginator
    {
        $treatment = Treatment::paginate(10);
        return $treatment;
    }

    public function get($id): Treatment
    {
        $treatment = Treatment::find($id);
        return $treatment;
    }

    public function update($id, FormRequestBase $request)
    {
        $treatment = Treatment::find($id)->update($request->all());
        return $treatment;
    }
    public function delete($id)
    {
        Treatment::destroy($id);
    }
}
