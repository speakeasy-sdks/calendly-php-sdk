<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum WebhookSubscriptionScopeEnum: string
{
    case USER = 'user';
    case ORGANIZATION = 'organization';
}
