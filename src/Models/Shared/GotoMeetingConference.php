<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * GotoMeetingConference
 * Details about an Event that will take place using a GotoMeeting conference
 */
class GotoMeetingConference
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\GotoMeetingConferenceData')]
    public GotoMeetingConferenceData $data;
    
    #[\JMS\Serializer\Annotation\SerializedName('join_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $joinUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\GotoMeetingConferenceStatusEnum>')]
    public GotoMeetingConferenceStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\GotoMeetingConferenceTypeEnum>')]
    public GotoMeetingConferenceTypeEnum $type;
    
	public function __construct()
	{
		$this->data = new \calendly\calendly\Models\Shared\GotoMeetingConferenceData();
		$this->joinUrl = "";
		$this->status = \calendly\calendly\Models\Shared\GotoMeetingConferenceStatusEnum::INITIATED;
		$this->type = \calendly\calendly\Models\Shared\GotoMeetingConferenceTypeEnum::GOTOMEETING;
	}
}
