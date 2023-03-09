<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * GotoMeetingConferenceData
 * The conference metadata supplied by GoToMeeting
 */
class GotoMeetingConferenceData
{
    #[\JMS\Serializer\Annotation\SerializedName('conferenceCallInfo')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $conferenceCallInfo = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('uniqueMeetingId')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $uniqueMeetingId = null;
    
	public function __construct()
	{
		$this->conferenceCallInfo = null;
		$this->uniqueMeetingId = null;
	}
}
