<?php

namespace App\Services;

use App\Interfaces\IService;
use App\Models\DryingMethod;
use Illuminate\Http\Request;

class DryingMethodService implements IService
{
    public function create(Request $request): DryingMethod
    {
        // Create user
        $dryingMethod = DryingMethod::create([
            'name' => $request->name
        ]);


        return $dryingMethod;
    }
}
