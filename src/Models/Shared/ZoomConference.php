<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * ZoomConference
 * Meeting will take place in a Zoom conference
 */
class ZoomConference
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ZoomConferenceData')]
    public ZoomConferenceData $data;
    
    #[\JMS\Serializer\Annotation\SerializedName('join_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $joinUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ZoomConferenceStatusEnum>')]
    public ZoomConferenceStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ZoomConferenceTypeEnum>')]
    public ZoomConferenceTypeEnum $type;
    
	public function __construct()
	{
		$this->data = new \calendly\calendly\Models\Shared\ZoomConferenceData();
		$this->joinUrl = "";
		$this->status = \calendly\calendly\Models\Shared\ZoomConferenceStatusEnum::INITIATED;
		$this->type = \calendly\calendly\Models\Shared\ZoomConferenceTypeEnum::ZOOM_CONFERENCE;
	}
}
