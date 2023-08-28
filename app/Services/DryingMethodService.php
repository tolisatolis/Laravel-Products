<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IService;
use App\Models\DryingMethod;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class DryingMethodService implements IService
{
    public function create(Request $request): DryingMethod
    {
        $dryingMethod = DryingMethod::create($request->all());
        return $dryingMethod;
    }
    public function getAll(): LengthAwarePaginator
    {
        $dryingMethods = DryingMethod::paginate(10);
        return $dryingMethods;
    }

    public function get($id): DryingMethod
    {
        $dryingMethod = DryingMethod::find($id);
        return $dryingMethod;
    }

    public function update($id, FormRequestBase $request)
    {
        $dryingMethod = DryingMethod::find($id)->update($request->all());
        return $dryingMethod;
    }
    public function delete($id)
    {
        DryingMethod::destroy($id);
    }
}
