<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Event
 * Information about a scheduled meeting
 */
class Event
{
    #[\JMS\Serializer\Annotation\SerializedName('calendar_event')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\LegacyCalendarEvent')]
    public LegacyCalendarEvent $calendarEvent;
    
    #[\JMS\Serializer\Annotation\SerializedName('cancellation')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Cancellation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Cancellation $cancellation = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $endTime;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\Guest>
     */
    #[\JMS\Serializer\Annotation\SerializedName('event_guests')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\Guest>')]
    public array $eventGuests;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\EventEventMemberships>
     */
    #[\JMS\Serializer\Annotation\SerializedName('event_memberships')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\EventEventMemberships>')]
    public array $eventMemberships;
    
    #[\JMS\Serializer\Annotation\SerializedName('event_type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $eventType;
    
    #[\JMS\Serializer\Annotation\SerializedName('invitees_counter')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\EventInviteesCounter')]
    public EventInviteesCounter $inviteesCounter;
    
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $location;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventStatusEnum>')]
    public EventStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->calendarEvent = new \calendly\calendly\Models\Shared\LegacyCalendarEvent();
		$this->cancellation = null;
		$this->createdAt = new \DateTime();
		$this->endTime = new \DateTime();
		$this->eventGuests = [];
		$this->eventMemberships = [];
		$this->eventType = "";
		$this->inviteesCounter = new \calendly\calendly\Models\Shared\EventInviteesCounter();
		$this->location = null;
		$this->name = "";
		$this->startTime = new \DateTime();
		$this->status = \calendly\calendly\Models\Shared\EventStatusEnum::ACTIVE;
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
