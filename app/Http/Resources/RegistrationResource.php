<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'message' => 'Пользователь успешно зарегистрирован!',
            'data' => [
                'id' => $this->id,
                'email' => $this->email,
                'gender' => $this->gender,
            ]
        ];
    }
}
