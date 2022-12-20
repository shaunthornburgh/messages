<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;

use App\Http\Resource\UserResource;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $users = User::all()->pluck('email');

        return $this->generateResponse($users, 200);
    }

    /**
     * @param User $user
     * @param StoreUserRequest $request
     * @return JsonResponse
     */
    public function update(User $user, StoreUserRequest $request): JsonResponse
    {
        $user->update($request->all());

        return $this->generateResponse(new UserResource($user), 200);
    }
}
