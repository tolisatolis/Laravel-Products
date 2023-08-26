<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDryingMethodRequest;
use App\Http\Requests\UpdateDryingMethodRequest;
use App\Services\DryingMethodService;
use App\Models\DryingMethod;

class DryingMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DryingMethodService $dryingMethodService)
    {
        return view('item-list', [
            'title' => 'Drying Methods',
            'data' => $dryingMethodService->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(StoreDryingMethodRequest $request, DryingMethodService $dryingMethodService)
    {
        //
        $dryingMethod = $dryingMethodService->create($request);
    }


    /**
     * Display the specified resource.
     */
    public function show($id, DryingMethodService $dryingMethodService)
    {
        return view('item-list', [
            'title' => 'Drying Methods',
            'data' => $dryingMethodService->get($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DryingMethod $dryingMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDryingMethodRequest $request, DryingMethod $dryingMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DryingMethod $dryingMethod)
    {
        //
    }
}
