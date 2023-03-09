<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class WebExConferenceDataTelephonyCallInNumbers
{
    #[\JMS\Serializer\Annotation\SerializedName('callInNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $callInNumber;
    
    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $label;
    
    #[\JMS\Serializer\Annotation\SerializedName('tollType')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $tollType;
    
	public function __construct()
	{
		$this->callInNumber = "";
		$this->label = "";
		$this->tollType = "";
	}
}
