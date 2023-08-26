<?php

namespace App\Services;

use App\Interfaces\IService;
use App\Models\DryingMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Faker\Core\Number;

class DryingMethodService implements IService
{
    public function create(Request $request): DryingMethod
    {
        $dryingMethod = DryingMethod::create([
            'name' => $request->name
        ]);


        return $dryingMethod;
    }
    public function getAll(): Collection
    {
        $dryingMethods = DryingMethod::get();

        return $dryingMethods;
    }

    public function get($id): DryingMethod
    {
        $dryingMethod = DryingMethod::find($id);
        return $dryingMethod;
    }

    public function update(Request $request)
    {
        $dryingMethod = DryingMethod::find($request->id);
        $dryingMethod->name = $request->name;
        $dryingMethod->save();
    }
    public function delete($id)
    {
        $dryingMethod = DryingMethod::destroy($id);
    }
}
