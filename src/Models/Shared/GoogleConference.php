<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * GoogleConference
 * Details about an Event that will take place using a Google Meet / Hangout conference
 */
class GoogleConference
{
    #[\JMS\Serializer\Annotation\SerializedName('join_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $joinUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\GoogleConferenceStatusEnum>')]
    public GoogleConferenceStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\GoogleConferenceTypeEnum>')]
    public GoogleConferenceTypeEnum $type;
    
	public function __construct()
	{
		$this->joinUrl = "";
		$this->status = \calendly\calendly\Models\Shared\GoogleConferenceStatusEnum::INITIATED;
		$this->type = \calendly\calendly\Models\Shared\GoogleConferenceTypeEnum::GOOGLE_CONFERENCE;
	}
}
