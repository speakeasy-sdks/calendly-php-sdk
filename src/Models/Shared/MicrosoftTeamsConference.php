<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * MicrosoftTeamsConference
 * Meeting will take place in a Microsoft Teams conference
 */
class MicrosoftTeamsConference
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\MicrosoftTeamsConferenceData')]
    public MicrosoftTeamsConferenceData $data;
    
    #[\JMS\Serializer\Annotation\SerializedName('join_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $joinUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\MicrosoftTeamsConferenceStatusEnum>')]
    public MicrosoftTeamsConferenceStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\MicrosoftTeamsConferenceTypeEnum>')]
    public MicrosoftTeamsConferenceTypeEnum $type;
    
	public function __construct()
	{
		$this->data = new \calendly\calendly\Models\Shared\MicrosoftTeamsConferenceData();
		$this->joinUrl = "";
		$this->status = \calendly\calendly\Models\Shared\MicrosoftTeamsConferenceStatusEnum::INITIATED;
		$this->type = \calendly\calendly\Models\Shared\MicrosoftTeamsConferenceTypeEnum::MICROSOFT_TEAMS_CONFERENCE;
	}
}
