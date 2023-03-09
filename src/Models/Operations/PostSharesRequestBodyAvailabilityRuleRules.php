<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSharesRequestBodyAvailabilityRuleRules
{
    #[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $date = null;
    
    /**
     * @var ?array<\calendly\calendly\Models\Operations\PostSharesRequestBodyAvailabilityRuleRulesIntervals>
     */
    #[\JMS\Serializer\Annotation\SerializedName('intervals')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Operations\PostSharesRequestBodyAvailabilityRuleRulesIntervals>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $intervals = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostSharesRequestBodyAvailabilityRuleRulesTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostSharesRequestBodyAvailabilityRuleRulesTypeEnum $type = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('wday')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostSharesRequestBodyAvailabilityRuleRulesWdayEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostSharesRequestBodyAvailabilityRuleRulesWdayEnum $wday = null;
    
	public function __construct()
	{
		$this->date = null;
		$this->intervals = null;
		$this->type = null;
		$this->wday = null;
	}
}
