<?php

namespace App\Interfaces;

use App\Http\Requests\FormRequestBase;

interface IModelService
{
    public function create(FormRequestBase $request);
    public function getAll();
    public function get($id);
    public function update($id, FormRequestBase $request);
    public function delete($id);
}
