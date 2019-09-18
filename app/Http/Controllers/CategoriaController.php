<?php

namespace App\Http\Controllers;

use App\Services\CategoriaService;

class CategoriaController extends Controller
{
    /**
     * CategoriaController constructor.
     * @param CategoriaService $service
     */
    public function __construct(CategoriaService $service)
    {
        $this->service = $service;
    }
}
