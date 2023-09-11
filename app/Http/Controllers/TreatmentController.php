<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTreatmentRequest;
use App\Http\Requests\UpdateTreatmentRequest;
use App\Http\Requests\FormRequestBase;
use App\Services\TreatmentViewConfigurationService;
use App\Services\TreatmentService;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TreatmentService $treatmentService)
    {

        return view('item-list', [
            'title' => 'Treatments',
            'data' => $treatmentService->getAll(),
            'editRoute' => 'editTreatment',
            'deleteRoute' => 'deleteTreatment',
            'detailRoute' => 'getTreatment',
            'labels' => ['ID', 'Name'],
            'columns' => ['id', 'name']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(TreatmentViewConfigurationService $treatmentViewConfigurationService)
    {
        $inputs = $treatmentViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Treatment',
            'data' => [],
            'inputs' => $inputs,
            'type' => 'store',
            'editing' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(StoreTreatmentRequest $request, TreatmentService $treatmentService)
    {
        $treatment =  $treatmentService->create($request);
        return redirect('/treatments');
    }


    /**
     * Display the specified resource.
     */
    public function show($id, TreatmentService $treatmentService, TreatmentViewConfigurationService $treatmentViewConfigurationService)
    {
        $inputs = $treatmentViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Treatment',
            'data' => $treatmentService->get($id),
            'inputs' => $inputs,
            'type' => 'show',
            'editing' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, TreatmentService $treatmentService, TreatmentViewConfigurationService $treatmentViewConfigurationService)
    {
        $inputs = $treatmentViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Treatment',
            'data' => $treatmentService->get($id),
            'inputs' => $inputs,
            'type' => 'update',
            'editing' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateTreatmentRequest $request, TreatmentService $treatmentService)
    {
        $treatmentService->update($id, $request);
        return redirect('/treatments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, TreatmentService $treatmentService)
    {
        $treatmentService->delete($id);
        return back('/treatments');
    }
}
