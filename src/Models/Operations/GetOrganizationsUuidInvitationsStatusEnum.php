<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum GetOrganizationsUuidInvitationsStatusEnum: string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case DECLINED = 'declined';
}
