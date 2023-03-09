<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;


enum RevokeUsersOrganizationInvitation403ApplicationJSONMessageEnum: string
{
    case YOU_CANNOT_PERFORM_THIS_ACTION_FOR_AN_ORGANIZATION_WITH_SCIM_ENABLED = 'You cannot perform this action for an organization with SCIM enabled.';
    case YOU_DO_NOT_HAVE_PERMISSION = 'You do not have permission';
    case YOU_DO_NOT_HAVE_PERMISSION_TO_ACCESS_THIS_RESOURCE = 'You do not have permission to access this resource.';
}
