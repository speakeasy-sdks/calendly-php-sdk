<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum ActivityLog403ApplicationJSONMessageEnum: string
{
    case PLEASE_UPGRADE_YOUR_CALENDLY_ACCOUNT_TO_ENTERPRISE = 'Please upgrade your Calendly account to Enterprise.';
    case YOU_DO_NOT_HAVE_PERMISSION_TO_ACCESS_THIS_RESOURCE = 'You do not have permission to access this resource.';
}