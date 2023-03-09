<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum AvailabilityRuleTypeEnum: string
{
    case WDAY = 'wday';
    case DATE = 'date';
}
