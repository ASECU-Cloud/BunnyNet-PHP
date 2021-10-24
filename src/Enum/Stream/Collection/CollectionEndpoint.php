<?php

/**
 * Written by ToshY, <24-10-2021>
 */

declare(strict_types=1);

namespace ToshY\BunnyNet\Enum\Stream\Collection;

use ToshY\BunnyNet\Enum\Header;

final class CollectionEndpoint
{
    /** @var array */
    public const GET_COLLECTION = [
        'method' => 'GET',
        'path' => 'library/%d/collections/%s',
        'headers' => [
            Header::ACCEPT_JSON,
        ],
    ];

    /** @var array */
    public const UPDATE_COLLECTION = [
        'method' => 'POST',
        'path' => 'library/%d/collections/%s',
        'headers' => [
            Header::ACCEPT_JSON,
            Header::CONTENT_TYPE_JSON_ALL,
        ],
    ];

    /** @var array */
    public const DELETE_COLLECTION = [
        'method' => 'DELETE',
        'path' => 'library/%d/collections/%s',
        'headers' => [
            Header::ACCEPT_JSON,
        ],
    ];

    /** @var array */
    public const GET_COLLECTION_LIST = [
        'method' => 'GET',
        'path' => 'library/%d/collections',
        'headers' => [
            Header::ACCEPT_JSON
        ]
    ];

    /** @var array */
    public const CREATE_COLLECTION = [
        'method' => 'POST',
        'path' => 'library/%d/collections/%s',
        'headers' => [
            Header::ACCEPT_JSON,
            Header::CONTENT_TYPE_JSON_ALL,
        ],
    ];
}
