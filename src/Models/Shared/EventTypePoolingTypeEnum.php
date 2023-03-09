<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum EventTypePoolingTypeEnum: string
{
    case ROUND_ROBIN = 'round_robin';
    case COLLECTIVE = 'collective';
}
