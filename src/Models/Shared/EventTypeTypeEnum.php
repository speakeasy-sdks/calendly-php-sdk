<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum EventTypeTypeEnum: string
{
    case STANDARD_EVENT_TYPE = 'StandardEventType';
    case ADHOC_EVENT_TYPE = 'AdhocEventType';
}
