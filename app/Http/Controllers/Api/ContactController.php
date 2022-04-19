<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resource\ContactResource;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    use ResponseTrait;

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->generateResponse(ContactResource::collection(User::all()), 200);
    }
}
