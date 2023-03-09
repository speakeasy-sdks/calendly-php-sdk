<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ZoomConferenceDataSettings
{
    /**
     * @var ?array<\calendly\calendly\Models\Shared\ZoomConferenceDataSettingsGlobalDialInNumbers>
     */
    #[\JMS\Serializer\Annotation\SerializedName('global_dial_in_numbers')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\ZoomConferenceDataSettingsGlobalDialInNumbers>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $globalDialInNumbers = null;
    
	public function __construct()
	{
		$this->globalDialInNumbers = null;
	}
}
