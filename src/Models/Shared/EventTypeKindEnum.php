<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum EventTypeKindEnum: string
{
    case SOLO = 'solo';
    case GROUP = 'group';
}
