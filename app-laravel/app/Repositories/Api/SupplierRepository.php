<?php

namespace App\Repositories\Api;

use App\DTOS\Api\SupplierDTO;
use App\Interfaces\Api\ISupplierRepository;
use App\Models\Supplier;
use stdClass;

class SupplierRepository implements ISupplierRepository{
    public function __construct(
        protected Supplier $model,
    ) {}

    public function store(SupplierDTO $data): stdClass{
        $supplier = $this->model->create((array) $data);
        
        return (object) $supplier->toArray();
    }
}