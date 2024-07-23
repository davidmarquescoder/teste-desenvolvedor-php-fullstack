<?php

namespace App\Interfaces\Api;

use App\DTOS\Api\SupplierDTO;
use stdClass;

interface ISupplierRepository {
    public function store(SupplierDTO $data): stdClass;
}