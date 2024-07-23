<?php

namespace App\Services\Api;

use App\DTOS\Api\SupplierDTO;
use App\Interfaces\Api\ISupplierRepository;
use App\Interfaces\Api\ISupplierService;
use stdClass;

class SupplierService implements ISupplierService {
    public function __construct(
        protected ISupplierRepository $repository,
    ) {}

    public function store(SupplierDTO $data): stdClass {
        return $this->repository->store($data);
    }
}