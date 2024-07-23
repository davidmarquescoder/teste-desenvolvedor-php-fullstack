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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
        try {
            $supplier = $this->service->store(
                SupplierDTO::makeFromRequest($request)
            );
    
            return response()->json($supplier, 201);
        } catch(\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}