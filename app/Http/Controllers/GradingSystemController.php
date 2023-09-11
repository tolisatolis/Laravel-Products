<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestBase;
use App\Http\Requests\StoreDryingMethodRequest;
use App\Http\Requests\StoreGradingSystemRequest;
use App\Http\Requests\UpdateGradingSystemRequest;
use App\Services\GradingSystemService;
use App\Services\GradingSystemViewConfigurationService;

class GradingSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GradingSystemService $gradingSystemService)
    {

        return view('item-list', [
            'title' => 'Grading Systems',
            'data' => $gradingSystemService->getAll(),
            'editRoute' => 'editGradingSystems',
            'deleteRoute' => 'deleteGradingSystems',
            'detailRoute' => 'getGradingSystems',
            'labels' => ['ID', 'Name'],
            'columns' => ['id', 'name']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(GradingSystemViewConfigurationService $gradingSystemViewConfigurationService)
    {
        $inputs = $gradingSystemViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Grading Systems',
            'data' => [],
            'inputs' => $inputs,
            'type' => 'store',
            'editing' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(StoreGradingSystemRequest $request, GradingSystemService $gradingSystemService)
    {
        $treatment =  $gradingSystemService->create($request);
        return redirect('/grading-systems');
    }


    /**
     * Display the specified resource.
     */
    public function show($id, GradingSystemService $gradingSystemService, GradingSystemViewConfigurationService $gradingSystemViewConfigurationService)
    {
        $inputs = $gradingSystemViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Grading Systems',
            'data' => $gradingSystemService->get($id),
            'inputs' => $inputs,
            'type' => 'show',
            'editing' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, GradingSystemService $gradingSystemService, GradingSystemViewConfigurationService $gradingSystemViewConfigurationService)
    {
        $inputs = $gradingSystemViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Grading Systems',
            'data' => $gradingSystemService->get($id),
            'inputs' => $inputs,
            'type' => 'update',
            'editing' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateGradingSystemRequest $request, GradingSystemService $gradingSystemService)
    {
        $gradingSystemService->update($id, $request);
        return redirect('/grading-systems');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, GradingSystemService $gradingSystemService)
    {
        $gradingSystemService->delete($id);
        return back('/grading-systems');
    }
}
