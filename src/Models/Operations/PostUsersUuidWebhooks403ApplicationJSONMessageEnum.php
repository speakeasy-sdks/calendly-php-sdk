<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum PostUsersUuidWebhooks403ApplicationJSONMessageEnum: string
{
    case PLEASE_UPGRADE_YOUR_CALENDLY_ACCOUNT_TO_PROFESSIONAL = 'Please upgrade your Calendly account to Professional';
    case YOU_DO_NOT_HAVE_PERMISSION_TO_ACCESS_THIS_RESOURCE = 'You do not have permission to access this resource.';
    case YOU_DO_NOT_HAVE_PERMISSION = 'You do not have permission';
}
