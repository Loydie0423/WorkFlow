<?php
namespace App\Contracts;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface EmployerJobContracts {
    public function validatejobpost(array $data): array;
}