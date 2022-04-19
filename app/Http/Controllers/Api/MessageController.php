<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Resource\MessageResource;
use App\Models\Message;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class MessageController extends Controller
{
    use ResponseTrait;

    /**
     * @return JsonResponse
     */
    public function index(User $contact): JsonResponse
    {
        $messages = Message::where('from', $contact->id)->orWhere('to', $contact->id)->get();

        return $this->generateResponse(MessageResource::collection($messages), 200);
    }
}
