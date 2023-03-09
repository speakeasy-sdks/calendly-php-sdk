<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum GetScheduledEvents403ApplicationJSONMessageEnum: string
{
    case YOU_DO_NOT_HAVE_PERMISSION_TO_ACCESS_THIS_RESOURCE = 'You do not have permission to access this resource.';
    case PLEASE_ALSO_SPECIFY_ORGANIZATION_WHEN_REQUESTING_EVENTS_FOR_A_USER_WITHIN_YOUR_ORGANIZATION = 'Please also specify organization when requesting events for a user within your organization.';
    case THIS_USER_IS_NOT_IN_YOUR_ORGANIZATION = 'This user is not in your organization';
    case YOU_DO_NOT_HAVE_PERMISSION = 'You do not have permission';
}
