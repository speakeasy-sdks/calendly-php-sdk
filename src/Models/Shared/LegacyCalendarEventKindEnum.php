<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum LegacyCalendarEventKindEnum: string
{
    case EXCHANGE = 'exchange';
    case GOOGLE = 'google';
    case ICLOUD = 'icloud';
    case OUTLOOK = 'outlook';
    case OUTLOOK_DESKTOP = 'outlook_desktop';
}
