<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class GetScheduledEventsEventUuidInviteesInviteeUuidPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=event_uuid')]
    public string $eventUuid;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=invitee_uuid')]
    public string $inviteeUuid;
    
	public function __construct()
	{
		$this->eventUuid = "";
		$this->inviteeUuid = "";
	}
}
