<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ShareShareOverrideAvailabilityRuleRules
{
    #[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $date = null;
    
    /**
     * @var ?array<\calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRulesIntervals>
     */
    #[\JMS\Serializer\Annotation\SerializedName('intervals')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRulesIntervals>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $intervals = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRulesTypeEnum>')]
    public ShareShareOverrideAvailabilityRuleRulesTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('wday')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRulesWdayEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ShareShareOverrideAvailabilityRuleRulesWdayEnum $wday = null;
    
	public function __construct()
	{
		$this->date = null;
		$this->intervals = null;
		$this->type = \calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRuleRulesTypeEnum::WDAY;
		$this->wday = null;
	}
}
