<?php

namespace App\Http\Controllers\Api;

use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Resource\MessageResource;
use App\Models\Message;
use App\Models\User;
use App\Traits\ResponseTrait;
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

    /**
     * @param StoreMessageRequest $request
     * @return JsonResponse
     */
    public function store(StoreMessageRequest $request): JsonResponse
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->to,
            'text' => $request->text
        ]);

        broadcast(new NewMessage($message))->toOthers();

        return $this->generateResponse($message, 201);
    }
}
