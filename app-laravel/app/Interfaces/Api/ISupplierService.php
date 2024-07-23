<?php

namespace App\Interfaces\Api;

use App\DTOS\Api\SupplierDTO;
use stdClass;

interface ISupplierService {
    public function store(SupplierDTO $data): stdClass;
    public function update(string $id, SupplierDTO $data): stdClass | null;
}