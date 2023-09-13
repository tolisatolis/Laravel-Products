<?php

namespace App\Services;

use App\Interfaces\IModelService;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductsService implements IModelService
{
    public function create(FormRequest $request): Product
    {
        $filtered =  array_filter($request->all());
        $product = Product::create($filtered);
        return $product;
    }
    public function getAll(): LengthAwarePaginator
    {
        $product = Product::paginate(10);
        return $product;
    }

    public function get($id): Product
    {
        $product = Product::find($id);
        return $product;
    }

    public function update($id, FormRequest $request)
    {
        $filtered =  array_filter($request->all());
        $product = Product::find($id)->update($filtered);
        return $product;
    }
    public function delete($id)
    {
        Product::destroy($id);
    }
}
