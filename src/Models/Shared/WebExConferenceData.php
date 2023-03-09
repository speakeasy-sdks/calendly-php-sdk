<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * WebExConferenceData
 * The conference metadata supplied by GoToMeeting
 */
class WebExConferenceData
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    #[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $password;
    
    #[\JMS\Serializer\Annotation\SerializedName('telephony')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\WebExConferenceDataTelephony')]
    public WebExConferenceDataTelephony $telephony;
    
	public function __construct()
	{
		$this->id = "";
		$this->password = "";
		$this->telephony = new \calendly\calendly\Models\Shared\WebExConferenceDataTelephony();
	}
}
