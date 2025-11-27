<?php

namespace App\Http\Controllers\Api\v1\Registration;

use App\Api\V1\Services\RegisterService;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\RegistrationResource;

class RegistrationController extends Controller
{
    protected $registerService;
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }
    public function registerUser(RegistrationRequest $request) : RegistrationResource
    {
        $user = $this->registerService->registerUser($request->validated());

        return new RegistrationResource($user, 200);
    }
}
