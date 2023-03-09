<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum ShareShareOverrideAvailabilityRuleRulesWdayEnum: string
{
    case SUNDAY = 'sunday';
    case MONDAY = 'monday';
    case TUESDAY = 'tuesday';
    case WEDNESDAY = 'wednesday';
    case THURSDAY = 'thursday';
    case FRIDAY = 'friday';
    case SATURDAY = 'saturday';
}
