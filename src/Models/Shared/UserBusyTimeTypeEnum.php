<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum UserBusyTimeTypeEnum: string
{
    case CALENDLY = 'calendly';
    case EXTERNAL = 'external';
}
