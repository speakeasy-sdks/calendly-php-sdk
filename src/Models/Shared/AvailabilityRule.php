<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * AvailabilityRule - The rules for an availability schedule.
 * 
 * @package calendly\calendly\Models\Shared
 * @access public
 */
class AvailabilityRule
{
    /**
     * A specific date in the future that this should be applied to (i.e. "2030-12-31").
     * 
     * @var ?string $date
     */
	#[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $date = null;
    
    /**
     * The intervals to be applied to this Rule. Each interval represents when booking a meeting is allowed. If the interval array is empty, then there is no booking availability for that day. Time is in 24h format (i.e. "17:30") and local to the timezone in the Availability Schedule.
     * 
     * @var array<\calendly\calendly\Models\Shared\AvailabilityRuleIntervals> $intervals
     */
	#[\JMS\Serializer\Annotation\SerializedName('intervals')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\AvailabilityRuleIntervals>')]
    public array $intervals;
    
    /**
     * The type of this Availability Rule; can be "wday" or a specific "date".
     * 
     * @var \calendly\calendly\Models\Shared\AvailabilityRuleTypeEnum $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\AvailabilityRuleTypeEnum>')]
    public AvailabilityRuleTypeEnum $type;
    
    /**
     * The day of the week for which this Rule should be applied to.
     * 
     * @var ?\calendly\calendly\Models\Shared\AvailabilityRuleWdayEnum $wday
     */
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
