<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * UserBusyTime
 * An internal or external scheduled event for a given user
 */
class UserBusyTime
{
    #[\JMS\Serializer\Annotation\SerializedName('buffered_end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $bufferedEndTime = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('buffered_start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $bufferedStartTime = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $endTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\UserBusyTimeEvent')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UserBusyTimeEvent $event = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\UserBusyTimeTypeEnum>')]
    public UserBusyTimeTypeEnum $type;
    
	public function __construct()
	{
		$this->bufferedEndTime = null;
		$this->bufferedStartTime = null;
		$this->endTime = new \DateTime();
		$this->event = null;
		$this->startTime = new \DateTime();
		$this->type = \calendly\calendly\Models\Shared\UserBusyTimeTypeEnum::CALENDLY;
	}
}
