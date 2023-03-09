<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class WebExConferenceDataTelephony
{
    /**
     * @var array<\calendly\calendly\Models\Shared\WebExConferenceDataTelephonyCallInNumbers>
     */
    #[\JMS\Serializer\Annotation\SerializedName('callInNumbers')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\WebExConferenceDataTelephonyCallInNumbers>')]
    public array $callInNumbers;
    
	public function __construct()
	{
		$this->callInNumbers = [];
	}
}
