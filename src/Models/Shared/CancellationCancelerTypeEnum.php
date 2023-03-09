<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum CancellationCancelerTypeEnum: string
{
    case HOST = 'host';
    case INVITEE = 'invitee';
}
