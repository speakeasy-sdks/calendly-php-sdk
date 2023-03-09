<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ZoomConferenceDataExtra
{
    #[\JMS\Serializer\Annotation\SerializedName('intl_numbers_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $intlNumbersUrl = null;
    
	public function __construct()
	{
		$this->intlNumbersUrl = null;
	}
}
