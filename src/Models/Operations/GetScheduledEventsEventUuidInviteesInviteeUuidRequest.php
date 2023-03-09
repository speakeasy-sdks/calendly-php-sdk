<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsEventUuidInviteesInviteeUuidRequest
{
    public GetScheduledEventsEventUuidInviteesInviteeUuidPathParams $pathParams;
    
    public GetScheduledEventsEventUuidInviteesInviteeUuidSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetScheduledEventsEventUuidInviteesInviteeUuidSecurity();
	}
}
