<?php
namespace App\Contracts;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface JobContracts {
    public function validatejobpost(Request $request): JsonResponse;
    public function savejob(array $job, array $jobdet): JsonResponse;
}