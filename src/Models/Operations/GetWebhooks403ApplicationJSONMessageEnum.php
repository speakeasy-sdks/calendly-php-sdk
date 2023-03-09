<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum GetWebhooks403ApplicationJSONMessageEnum: string
{
    case YOU_DO_NOT_HAVE_PERMISSION = 'You do not have permission';
    case YOU_DO_NOT_HAVE_PERMISSION_TO_ACCESS_THIS_RESOURCE = 'You do not have permission to access this resource.';
    case UNAUTHORIZED = 'Unauthorized';
}
