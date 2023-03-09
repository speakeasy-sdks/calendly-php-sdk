<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * AvailabilityRule
 * The rules for an availability schedule.
 */
class AvailabilityRule
{
    #[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $date = null;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\AvailabilityRuleIntervals>
     */
    #[\JMS\Serializer\Annotation\SerializedName('intervals')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\AvailabilityRuleIntervals>')]
    public array $intervals;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\AvailabilityRuleTypeEnum>')]
    public AvailabilityRuleTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('wday')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\AvailabilityRuleWdayEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AvailabilityRuleWdayEnum $wday = null;
    
	public function __construct()
	{
		$this->date = null;
		$this->intervals = [];
		$this->type = \calendly\calendly\Models\Shared\AvailabilityRuleTypeEnum::WDAY;
		$this->wday = null;
	}
}
