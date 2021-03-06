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
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    use ResponseTrait;

    /**
     * @return JsonResponse
     */
    public function index(User $contact): JsonResponse
    {
        Message::where('from', $contact->id)->where('to', auth()->id())->update(['read' => true]);

        $messages = Message::where( function($query) use ($contact) {
            $query->where('from', auth()->id());
            $query->where('to', $contact->id);
        })->orWhere( function($query) use($contact) {
            $query->where('from', $contact->id);
            $query->where('to', auth()->id());
        })->get();

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
            'text' => $request->text,
        ]);

        broadcast(new NewMessage($message))->toOthers();

        return $this->generateResponse(new MessageResource($message), 201);
    }
}
