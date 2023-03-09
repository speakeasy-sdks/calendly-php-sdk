<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum OrganizationMembershipRoleEnum: string
{
    case USER = 'user';
    case ADMIN = 'admin';
    case OWNER = 'owner';
}
