<?php

namespace App\Traits;

use App\Dictionaries\Response;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Cookie;

trait ResponseTrait
{
    public function generateResponse(
        $data,
        int $status = 0,
        ?string $message = null,
        ?Cookie $cookie = null
    ): JsonResponse {
        $status = $status > 0 ? $status : 500;
        $response = [
            'status' => $status,
            'data' => $data,
            'message' => $message ?? ($status > 320 ? Response::MESSAGE_ERROR : Response::MESSAGE_SUCCESS)
        ];

        $jsonResponse = new JsonResponse($response, $status, ResponseInterface::HEADERS);

        if ($cookie !== null) {
            $jsonResponse->headers->setCookie($cookie);
        }

        return $jsonResponse;
    }
}
