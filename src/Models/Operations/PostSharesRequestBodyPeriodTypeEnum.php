<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum PostSharesRequestBodyPeriodTypeEnum: string
{
    case AVAILABLE_MOVING = 'available_moving';
    case MOVING = 'moving';
    case FIXED = 'fixed';
    case UNLIMITED = 'unlimited';
}
