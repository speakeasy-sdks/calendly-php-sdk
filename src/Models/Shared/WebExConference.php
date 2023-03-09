<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * WebExConference
 * Details about an Event that will take place using a WebEx conference
 */
class WebExConference
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\WebExConferenceData')]
    public WebExConferenceData $data;
    
    #[\JMS\Serializer\Annotation\SerializedName('join_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $joinUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\WebExConferenceStatusEnum>')]
    public WebExConferenceStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\WebExConferenceTypeEnum>')]
    public WebExConferenceTypeEnum $type;
    
	public function __construct()
	{
		$this->data = new \calendly\calendly\Models\Shared\WebExConferenceData();
		$this->joinUrl = "";
		$this->status = \calendly\calendly\Models\Shared\WebExConferenceStatusEnum::INITIATED;
		$this->type = \calendly\calendly\Models\Shared\WebExConferenceTypeEnum::WEBEX_CONFERENCE;
	}
}
