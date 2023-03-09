<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


enum ShareShareOverrideLocationConfigurationsKindEnum: string
{
    case PHYSICAL = 'physical';
    case ASK_INVITEE = 'ask_invitee';
    case CUSTOM = 'custom';
    case OUTBOUND_CALL = 'outbound_call';
    case INBOUND_CALL = 'inbound_call';
    case GOOGLE_CONFERENCE = 'google_conference';
    case GOTOMEETING_CONFERENCE = 'gotomeeting_conference';
    case MICROSOFT_TEAMS_CONFERENCE = 'microsoft_teams_conference';
    case ZOOM_CONFERENCE = 'zoom_conference';
}
