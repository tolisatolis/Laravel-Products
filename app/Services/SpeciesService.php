<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IService;
use App\Models\Species;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SpeciesService implements IService
{
    public function create(Request $request): Species
    {
        $species = Species::create($request->all());
        return $species;
    }
    public function getAll(): LengthAwarePaginator
    {
        $species = Species::paginate(10);
        return $species;
    }

    public function get($id): Species
    {
        $species = Species::find($id);
        return $species;
    }

    public function update($id, FormRequestBase $request)
    {
        $species = Species::find($id)->update($request->all());
        return $species;
    }
    public function delete($id)
    {
        Species::destroy($id);
    }
}
