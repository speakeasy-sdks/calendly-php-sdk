<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * UserBusyTime - An internal or external scheduled event for a given user
 * 
 * @package calendly\calendly\Models\Shared
 * @access public
 */
class UserBusyTime
{
    /**
     * The end time of the calendly event, as calculated by any "after" buffer set by the user
     * 
     * @var ?\DateTime $bufferedEndTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('buffered_end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $bufferedEndTime = null;
    
    /**
     * The start time of the calendly event, as calculated by any "before" buffer set by the user
     * 
     * @var ?\DateTime $bufferedStartTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('buffered_start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $bufferedStartTime = null;
    
    /**
     * The end time of the scheduled event in UTC time
     * 
     * @var \DateTime $endTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $endTime;
    
	#[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\UserBusyTimeEvent')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UserBusyTimeEvent $event = null;
    
    /**
     * The start time of the scheduled event in UTC time
     * 
     * @var \DateTime $startTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startTime;
    
    /**
     * Indicates whether the scheduled event is internal or external
     * 
     * @var \calendly\calendly\Models\Shared\UserBusyTimeTypeEnum $type
     */
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
