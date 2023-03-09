<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSharesRequestBodyAvailabilityRule
{
    /**
     * @var ?array<\calendly\calendly\Models\Operations\PostSharesRequestBodyAvailabilityRuleRules>
     */
    #[\JMS\Serializer\Annotation\SerializedName('rules')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Operations\PostSharesRequestBodyAvailabilityRuleRules>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $rules = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;
    
	public function __construct()
	{
		$this->rules = null;
		$this->timezone = null;
	}
}
