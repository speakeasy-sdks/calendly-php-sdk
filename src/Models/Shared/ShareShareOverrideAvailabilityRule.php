<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ShareShareOverrideAvailabilityRule
{
    /**
     * @var array<\calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRules>
     */
    #[\JMS\Serializer\Annotation\SerializedName('rules')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRules>')]
    public array $rules;
    
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $timezone;
    
	public function __construct()
	{
		$this->rules = [];
		$this->timezone = "";
	}
}
