<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
use App\Services\GradeService;
use App\Services\GradeViewConfigurationService;
use Illuminate\Http\Request;

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
            'columns' => ['id', 'name', 'grading_system']
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
     */ public function store(StoreGradeRequest $request, GradeService $gradeService)
    {
        $treatment =  $gradeService->create($request);
        return redirect('/grades');
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
    public function update($id, UpdateGradeRequest $request, GradeService $gradeService)
    {
        $gradeService->update($id, $request);
        return redirect('/grades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, GradeService $gradeService)
    {
        $gradeService->delete($id);
        return back('/grades');
    }
    /**
     * Display a filtered listing of the resource.
     */
    public function byGradingSystem(Request $request, GradeService $gradeService)
    {

        $grades =  $gradeService->getGradesByGradingSystem($request->grading_system_id);

        if (count($grades) > 0) {
            return response()->json($grades);
        }
    }
}
