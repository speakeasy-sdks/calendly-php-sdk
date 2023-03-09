<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum InviteeStatusEnum: string
{
    case ACTIVE = 'active';
    case CANCELED = 'canceled';
}
