<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum GetScheduledEventsStatusEnum: string
{
    case ACTIVE = 'active';
    case CANCELED = 'canceled';
}
