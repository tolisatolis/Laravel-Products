<?php

namespace App\Interfaces;

use Faker\Core\Number;
use Illuminate\Http\Request;

interface IService
{
    public function create(Request $request);
    public function getAll();
    public function get($id);
    public function update(Request $request);
    public function delete($id);
}
