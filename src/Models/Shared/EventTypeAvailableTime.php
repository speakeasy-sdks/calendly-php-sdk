<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * EventTypeAvailableTime
 * An available meeting time slot for the given event type
 */
class EventTypeAvailableTime
{
    #[\JMS\Serializer\Annotation\SerializedName('invitees_remaining')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $inviteesRemaining;
    
    #[\JMS\Serializer\Annotation\SerializedName('scheduling_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $schedulingUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	public function __construct()
	{
		$this->inviteesRemaining = 0;
		$this->schedulingUrl = "";
		$this->startTime = new \DateTime();
		$this->status = "";
	}
}
