<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestBase;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Services\ProductViewConfigurationService;
use App\Services\ProductsService;
use Illuminate\Foundation\Http\FormRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductsService $productsService)
    {

        return view('item-list', [
            'title' => 'Products',
            'data' => $productsService->getAll(),
            'editRoute' => 'editProduct',
            'deleteRoute' => 'deleteProduct',
            'detailRoute' => 'getProduct',
            'columns' => ['id',  'thickness', 'width', 'length', 'species', 'grading_system', 'grade', 'drying_method', 'treatment'],
            'labels' => ['ID',  'Thickness', 'Width', 'Length', 'Species', 'Grading System', 'Grade', 'Drying Method', 'Treatment']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProductViewConfigurationService $productViewConfigurationService)
    {
        $inputs = $productViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Product',
            'data' => [],
            'inputs' => $inputs,
            'type' => 'store',
            'editing' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(StoreProductsRequest $request, ProductsService $productsService)
    {
        $productsService->create($request);
        return redirect('/marketplace');
    }


    /**
     * Display the specified resource.
     */
    public function show($id, ProductsService $productsService, ProductViewConfigurationService $productViewConfigurationService)
    {
        $inputs = $productViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Product',
            'data' => $productsService->get($id),
            'inputs' => $inputs,
            'type' => 'show',
            'editing' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, ProductsService $productsService, ProductViewConfigurationService $productViewConfigurationService)
    {
        $inputs = $productViewConfigurationService->createInputConfiguration();
        return view('detail', [
            'title' => 'Product',
            'data' => $productsService->get($id),
            'inputs' => $inputs,
            'type' => 'update',
            'editing' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateProductsRequest $request, ProductsService $productsService)
    {
        $productsService->update($id, $request);
        return redirect('/marketplace');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, ProductsService $productsService)
    {
        $productsService->delete($id);
        return back('/marketplace');
    }
}
