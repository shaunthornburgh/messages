<?php

namespace App\Traits;

interface ResponseInterface
{
    public const MEDIA_TYPE = 'application/json';
    public const HEADERS = [
        'Accept' => self::MEDIA_TYPE,
        'Content-type' => self::MEDIA_TYPE
    ];
}
