<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum PostSharesRequestBodyAvailabilityRuleRulesTypeEnum: string
{
    case WDAY = 'wday';
    case DATE = 'date';
}
