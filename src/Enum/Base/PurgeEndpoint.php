<?php

declare(strict_types=1);

namespace ToshY\BunnyNet\Enum\Base;

use ToshY\BunnyNet\Enum\Header;

final class PurgeEndpoint
{
    public const PURGE_URL = [
        'method' => 'POST',
        'path' => 'purge',
        'headers' => [],
        'query' => [
            'url' => [
                'required' => true,
                'type' => 'string',
            ],
        ],
        'body' => [],
    ];

    public const PURGE_URL_HEADER = [
        'method' => 'GET',
        'path' => 'purge',
        'headers' => [
            Header::ACCEPT_JSON,
        ],
        'query' => [
            'url' => [
                'required' => true,
                'type' => 'string',
            ],
            'headerName' => [
                'required' => false,
                'type' => 'string',
            ],
            'headerValue' => [
                'required' => false,
                'type' => 'string',
            ],
        ],
        'body' => [],
    ];
}
