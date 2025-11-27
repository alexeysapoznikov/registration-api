<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class ProfileController extends Controller
{
    public function getProfile(int $user = null): JsonResponse|ProfileResource
    {
        // без использования route model building для корректной проверки на Null

        $userModel = User::find($user);

        if (!$userModel) {
            return new JsonResponse([
                'message' => 'Пользователь не найден',
                'data' => null,
            ], 404);
        }

        return new ProfileResource($userModel);
    }
}
