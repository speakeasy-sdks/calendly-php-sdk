<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * CustomLocation
 * Use this to describe an existing Calendly-supported event location.
 */
class CustomLocation
{
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $location;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\CustomLocationTypeEnum>')]
    public CustomLocationTypeEnum $type;
    
	public function __construct()
	{
		$this->location = "";
		$this->type = \calendly\calendly\Models\Shared\CustomLocationTypeEnum::CUSTOM;
	}
}
