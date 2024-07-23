<?php

namespace App\Services\Api;

use App\DTOS\Api\SupplierDTO;
use App\Interfaces\Api\ISupplierRepository;
use App\Interfaces\Api\ISupplierService;
use Exception;
use stdClass;

class SupplierService implements ISupplierService {
    public function __construct(
        protected ISupplierRepository $repository,
    ) {}

    public function store(SupplierDTO $data): stdClass {
        $supplier = $this->repository->store($data);
        
        return $supplier;
    }
    
    public function show(string $id): stdClass | null {
        $this->validateSupplierExists($id);
        $supplier = $this->repository->show($id);
        
        return $supplier;
    }
    
    public function update(string $id, SupplierDTO $data): stdClass | null {
        $this->validateSupplierExists($id);
        $supplier = $this->repository->update($id, $data);
        
        return $supplier;
    }

    public function destroy(string $id): void {
        $this->validateSupplierExists($id);
        $this->repository->destroy($id);
    }

    private function validateSupplierExists(string $id) {
        $supplier = $this->repository->findOne($id);
        
        if (!$supplier) throw new Exception('Fornecedor não encontrado.');
    }
}