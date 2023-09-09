<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestBase;
use App\Http\Requests\StoreSpeciesRequest;
use App\Http\Requests\UpdateSpeciesRequest;
use App\Services\SpeciesViewConfigurationService;
use App\Services\SpeciesService;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SpeciesService $speciesService)
    {

        return view('item-list', [
            'title' => 'Species',
            'data' => $speciesService->getAll(),
            'editRoute' => 'editSpecies',
            'deleteRoute' => 'deleteSpecies',
            'columns' => ['id', 'name']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(SpeciesViewConfigurationService $speciesViewConfigurationService)
    {
        $inputs = $speciesViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Species',
            'data' => [],
            'inputs' => $inputs,
            'type' => 'store',
            'editing' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(StoreSpeciesRequest $request, SpeciesService $speciesService)
    {
        $treatment =  $speciesService->create($request);
        return redirect('/species');
    }


    /**
     * Display the specified resource.
     */
    public function show($id, SpeciesService $speciesService, SpeciesViewConfigurationService $speciesViewConfigurationService)
    {
        $inputs = $speciesViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Species',
            'data' => $speciesService->get($id),
            'inputs' => $inputs,
            'type' => 'show',
            'editing' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, SpeciesService $speciesService, SpeciesViewConfigurationService $speciesViewConfigurationService)
    {
        $inputs = $speciesViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Species',
            'data' => $speciesService->get($id),
            'inputs' => $inputs,
            'type' => 'update',
            'editing' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateSpeciesRequest $request, SpeciesService $speciesService)
    {
        $speciesService->update($id, $request);
        return redirect('/species');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, SpeciesService $speciesService)
    {
        $speciesService->delete($id);
        return back('/species');
    }
}
