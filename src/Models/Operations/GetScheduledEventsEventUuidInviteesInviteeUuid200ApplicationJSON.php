<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsEventUuidInviteesInviteeUuid200ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Invitee')]
    public \calendly\calendly\Models\Shared\Invitee $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\Invitee();
	}
}
