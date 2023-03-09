<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * ZoomConferenceData
 * The conference metadata supplied by Zoom
 */
class ZoomConferenceData
{
    #[\JMS\Serializer\Annotation\SerializedName('extra')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ZoomConferenceDataExtra')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ZoomConferenceDataExtra $extra = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $password = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('settings')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ZoomConferenceDataSettings')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ZoomConferenceDataSettings $settings = null;
    
	public function __construct()
	{
		$this->extra = null;
		$this->id = null;
		$this->password = null;
		$this->settings = null;
	}
}
