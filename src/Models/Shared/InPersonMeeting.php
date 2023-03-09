<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InPersonMeeting
 * Information about the physical (in-person) event location
 */
class InPersonMeeting
{
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $location;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\InPersonMeetingTypeEnum>')]
    public InPersonMeetingTypeEnum $type;
    
	public function __construct()
	{
		$this->location = "";
		$this->type = \calendly\calendly\Models\Shared\InPersonMeetingTypeEnum::PHYSICAL;
	}
}
