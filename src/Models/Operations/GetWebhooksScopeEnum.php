<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum GetWebhooksScopeEnum: string
{
    case ORGANIZATION = 'organization';
    case USER = 'user';
}
