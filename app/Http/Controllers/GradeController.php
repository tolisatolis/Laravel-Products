<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestBase;
use App\Services\GradeService;
use App\Services\GradeViewConfigurationService;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GradeService $gradeService)
    {

        return view('item-list', [
            'title' => 'Grades',
            'data' => $gradeService->getAll(),
            'editRoute' => 'editGrades',
            'deleteRoute' => 'deleteGrades',
            'columns' => ['id', 'name', 'grading_system_id']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(GradeViewConfigurationService $gradeViewConfigurationService)
    {
        $inputs = $gradeViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Grade',
            'data' => [],
            'inputs' => $inputs,
            'type' => 'store',
            'editing' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(FormRequestBase $request, GradeService $gradeService)
    {
        $treatment =  $gradeService->create($request);
        return redirect('/grades/' . $treatment->id);
    }


    /**
     * Display the specified resource.
     */
    public function show($id, GradeService $gradeService, GradeViewConfigurationService $gradeViewConfigurationService)
    {
        $inputs = $gradeViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Grade',
            'data' => $gradeService->get($id),
            'inputs' => $inputs,
            'type' => 'show',
            'editing' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, GradeService $gradeService, GradeViewConfigurationService $gradeViewConfigurationService)
    {
        $inputs = $gradeViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Grade',
            'data' => $gradeService->get($id),
            'inputs' => $inputs,
            'type' => 'update',
            'editing' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, FormRequestBase $request, GradeService $gradeService)
    {
        $gradeService->update($id, $request);
        return redirect('/grades/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, GradeService $gradeService)
    {
        $gradeService->delete($id);
        return back('/grades');
    }
}
