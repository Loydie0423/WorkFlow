<?php

namespace App\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface ApplicantJobContracts {
    public function savejob(Request $request): JsonResponse;
    public function savedjobsremove(string $uuid): JsonResponse;
}