<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum GetInviteesStatusEnum: string
{
    case ACTIVE = 'active';
    case CANCELED = 'canceled';
}
