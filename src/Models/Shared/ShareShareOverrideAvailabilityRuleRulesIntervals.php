<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ShareShareOverrideAvailabilityRuleRulesIntervals
{
    #[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $from = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $to = null;
    
	public function __construct()
	{
		$this->from = null;
		$this->to = null;
	}
}
