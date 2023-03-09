<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum EventTypeKindDescriptionEnum: string
{
    case COLLECTIVE = 'Collective';
    case GROUP = 'Group';
    case ONE_ON_ONE = 'One-on-One';
    case ROUND_ROBIN = 'Round Robin';
}
