<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteeSpecifiedLocation
 * Information about an event location that’s specified by the invitee.
 */
class InviteeSpecifiedLocation
{
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $location;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\InviteeSpecifiedLocationTypeEnum>')]
    public InviteeSpecifiedLocationTypeEnum $type;
    
	public function __construct()
	{
		$this->location = "";
		$this->type = \calendly\calendly\Models\Shared\InviteeSpecifiedLocationTypeEnum::ASK_INVITEE;
	}
}
