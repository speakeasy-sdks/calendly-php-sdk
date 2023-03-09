<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ShareShareOverride
{
    #[\JMS\Serializer\Annotation\SerializedName('availability_rule')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\ShareShareOverrideAvailabilityRule')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ShareShareOverrideAvailabilityRule $availabilityRule = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $duration = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('end_date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $endDate = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('hide_location')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $hideLocation = null;
    
    /**
     * @var ?array<\calendly\calendly\Models\Shared\ShareShareOverrideLocationConfigurations>
     */
    #[\JMS\Serializer\Annotation\SerializedName('location_configurations')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\ShareShareOverrideLocationConfigurations>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $locationConfigurations = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max_booking_time')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxBookingTime = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('period_type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ShareShareOverridePeriodTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ShareShareOverridePeriodTypeEnum $periodType = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('start_date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $startDate = null;
    
	public function __construct()
	{
		$this->availabilityRule = null;
		$this->duration = null;
		$this->endDate = null;
		$this->hideLocation = null;
		$this->locationConfigurations = null;
		$this->maxBookingTime = null;
		$this->name = null;
		$this->periodType = null;
		$this->startDate = null;
	}
}
