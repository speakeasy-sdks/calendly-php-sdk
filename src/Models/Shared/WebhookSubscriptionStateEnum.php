<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum WebhookSubscriptionStateEnum: string
{
    case ACTIVE = 'active';
    case DISABLED = 'disabled';
}
