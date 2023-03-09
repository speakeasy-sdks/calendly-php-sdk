<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum ProfileTypeEnum: string
{
    case USER = 'User';
    case TEAM = 'Team';
}
