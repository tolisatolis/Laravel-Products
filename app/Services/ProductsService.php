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
        $product = Product::create($request->all());
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
        $product = Product::find($id)->update($request->all());
        return $product;
    }
    public function delete($id)
    {
        Product::destroy($id);
    }
}
