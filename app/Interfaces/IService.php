<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface IService
{
    public function create(Request $request);
}
