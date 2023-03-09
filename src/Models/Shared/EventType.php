<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * EventType
 * A configuration for an Event
 */
class EventType
{
    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $active;
    
    #[\JMS\Serializer\Annotation\SerializedName('admin_managed')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $adminManaged;
    
    #[\JMS\Serializer\Annotation\SerializedName('booking_method')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventTypeBookingMethodEnum>')]
    public EventTypeBookingMethodEnum $bookingMethod;
    
    #[\JMS\Serializer\Annotation\SerializedName('color')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $color;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * @var array<\calendly\calendly\Models\Shared\EventTypeCustomQuestion>
     */
    #[\JMS\Serializer\Annotation\SerializedName('custom_questions')]
    #[\JMS\Serializer\Annotation\Type('array<calendly\calendly\Models\Shared\EventTypeCustomQuestion>')]
    public array $customQuestions;
    
    #[\JMS\Serializer\Annotation\SerializedName('deleted_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $deletedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('description_html')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $descriptionHtml;
    
    #[\JMS\Serializer\Annotation\SerializedName('description_plain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $descriptionPlain;
    
    #[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $duration;
    
    #[\JMS\Serializer\Annotation\SerializedName('internal_note')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $internalNote;
    
    #[\JMS\Serializer\Annotation\SerializedName('kind')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventTypeKindEnum>')]
    public EventTypeKindEnum $kind;
    
    #[\JMS\Serializer\Annotation\SerializedName('kind_description')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventTypeKindDescriptionEnum>')]
    public EventTypeKindDescriptionEnum $kindDescription;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('pooling_type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventTypePoolingTypeEnum>')]
    public EventTypePoolingTypeEnum $poolingType;
    
    #[\JMS\Serializer\Annotation\SerializedName('profile')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\Profile')]
    public Profile $profile;
    
    #[\JMS\Serializer\Annotation\SerializedName('scheduling_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $schedulingUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('secret')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $secret;
    
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\EventTypeTypeEnum>')]
    public EventTypeTypeEnum $type;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->active = false;
		$this->adminManaged = false;
		$this->bookingMethod = \calendly\calendly\Models\Shared\EventTypeBookingMethodEnum::INSTANT;
		$this->color = "";
		$this->createdAt = new \DateTime();
		$this->customQuestions = [];
		$this->deletedAt = new \DateTime();
		$this->descriptionHtml = "";
		$this->descriptionPlain = "";
		$this->duration = 0;
		$this->internalNote = "";
		$this->kind = \calendly\calendly\Models\Shared\EventTypeKindEnum::SOLO;
		$this->kindDescription = \calendly\calendly\Models\Shared\EventTypeKindDescriptionEnum::COLLECTIVE;
		$this->name = "";
		$this->poolingType = \calendly\calendly\Models\Shared\EventTypePoolingTypeEnum::ROUND_ROBIN;
		$this->profile = new \calendly\calendly\Models\Shared\Profile();
		$this->schedulingUrl = "";
		$this->secret = false;
		$this->slug = "";
		$this->type = \calendly\calendly\Models\Shared\EventTypeTypeEnum::STANDARD_EVENT_TYPE;
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
