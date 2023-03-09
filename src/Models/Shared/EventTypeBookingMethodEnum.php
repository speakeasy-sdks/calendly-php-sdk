<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum EventTypeBookingMethodEnum: string
{
    case INSTANT = 'instant';
    case POLL = 'poll';
}
