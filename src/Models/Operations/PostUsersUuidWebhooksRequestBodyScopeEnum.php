<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum PostUsersUuidWebhooksRequestBodyScopeEnum: string
{
    case ORGANIZATION = 'organization';
    case USER = 'user';
}
