<?php

declare(strict_types=1);

namespace ToshY\BunnyNet\Enum\Base;

use ToshY\BunnyNet\Enum\Header;

final class BillingEndpoint
{
    public const GET_BILLING_DETAILS = [
        'method' => 'GET',
        'path' => 'billing',
        'headers' => [
            Header::ACCEPT_JSON,
        ],
        'query' => [],
        'body' => [],
    ];

    public const GET_BILLING_SUMMARY = [
        'method' => 'GET',
        'path' => 'billing/summary',
        'headers' => [
            Header::ACCEPT_JSON,
        ],
        'query' => [],
        'body' => [],
    ];

    public const APPLY_PROMO_CODE = [
        'method' => 'GET',
        'path' => 'billing/applycode',
        'headers' => [
            Header::ACCEPT_JSON,
        ],
        'query' => [
            'CouponCode' => [
                'required' => true,
                'type' => 'string',
            ],
        ],
        'body' => [],
    ];
}
