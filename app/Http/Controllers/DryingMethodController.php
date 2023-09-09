<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestBase;
use App\Http\Requests\StoreDryingMethodRequest;
use App\Http\Requests\UpdateDryingMethodRequest;
use App\Services\DryingMethodService;
use App\Services\DryingMethodViewConfigurationService;

class DryingMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DryingMethodService $dryingMethodService)
    {

        return view('item-list', [
            'title' => 'Drying Methods',
            'data' => $dryingMethodService->getAll(),
            'editRoute' => 'editDryingMethod',
            'deleteRoute' => 'deleteDryingMethod',
            'columns' => ['id', 'name']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DryingMethodViewConfigurationService $dryingMethodViewConfigurationService)
    {
        $inputs = $dryingMethodViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Drying Methods',
            'data' => [],
            'inputs' => $inputs,
            'type' => 'store',
            'editing' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(StoreDryingMethodRequest $request, DryingMethodService $dryingMethodService)
    {
        $dryingMethod =  $dryingMethodService->create($request);
        return redirect('/drying-methods');
    }


    /**
     * Display the specified resource.
     */
    public function show($id, DryingMethodService $dryingMethodService, DryingMethodViewConfigurationService $dryingMethodViewConfigurationService)
    {
        $inputs = $dryingMethodViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Drying Methods',
            'data' => $dryingMethodService->get($id),
            'inputs' => $inputs,
            'type' => 'show',
            'editing' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, DryingMethodService $dryingMethodService, DryingMethodViewConfigurationService $dryingMethodViewConfigurationService)
    {
        $inputs = $dryingMethodViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Drying Methods',
            'data' => $dryingMethodService->get($id),
            'inputs' => $inputs,
            'type' => 'update',
            'editing' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateDryingMethodRequest $request, DryingMethodService $dryingMethodService)
    {
        $dryingMethodService->update($id, $request);
        return redirect('/drying-methods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, DryingMethodService $dryingMethodService)
    {
        $dryingMethodService->delete($id);
        return back('/drying-methods');
    }
}
