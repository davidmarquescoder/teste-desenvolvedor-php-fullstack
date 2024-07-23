<?php

namespace App\Http\Controllers\Api;

use App\DTOS\Api\SupplierDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Interfaces\Api\ISupplierService;

class SupplierController extends Controller
{
    public function __construct(
        protected ISupplierService $service,
    ) {}

    public function index()
    {
        //
    }

    public function store(SupplierRequest $request)
    {
        try {
            $supplier = $this->service->store(SupplierDTO::makeFromRequest($request));
    
            return response()->json($supplier, 201);
        } catch(\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }

    public function show(string $id)
    {
        //
    }

    public function update(SupplierRequest $request, string $id)
    {
        try {
            $supplier = $this->service->update($id, SupplierDTO::makeFromRequest($request));
    
            return response()->json($supplier, 200);
        } catch(\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }

    public function destroy(string $id)
    {
        //
    }
}