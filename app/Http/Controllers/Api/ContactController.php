<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resource\ContactResource;
use App\Models\Message;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    use ResponseTrait;

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $contacts = User::leftJoin('messages', 'users.id', '=', 'messages.from')
            ->select('users.id', 'users.name', 'users.email', 'users.profile_image', DB::raw('MAX(messages.created_at) as last_message_at'))
            ->where('users.id', '!=', auth()->id())
            ->groupBy('users.id')
            ->get();

        $unreadIds = Message::select(DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();
            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });

        return $this->generateResponse(ContactResource::collection($contacts), 200);
    }
}
