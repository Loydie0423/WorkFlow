<?php
namespace App\Contracts;

use Illuminate\Http\JsonResponse;

interface JobContracts {
    public function savejob(array $job, array $jobdet): JsonResponse;
}