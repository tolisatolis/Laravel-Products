<?php

namespace App\Services;

use App\Http\Requests\FormRequestBase;
use App\Interfaces\IService;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductsService implements IService
{
    public function create(Request $request): Product
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

    public function update($id, FormRequestBase $request)
    {
        $product = Product::find($id)->update($request->all());
        return $product;
    }
    public function delete($id)
    {
        Product::destroy($id);
    }
}
