<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum OrganizationInvitationStatusEnum: string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case DECLINED = 'declined';
}
