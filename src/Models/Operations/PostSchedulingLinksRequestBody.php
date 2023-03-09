<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostSchedulingLinksRequestBody
{
    #[\JMS\Serializer\Annotation\SerializedName('max_event_count')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $maxEventCount;
    
    #[\JMS\Serializer\Annotation\SerializedName('owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $owner;
    
    #[\JMS\Serializer\Annotation\SerializedName('owner_type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Operations\PostSchedulingLinksRequestBodyOwnerTypeEnum>')]
    public PostSchedulingLinksRequestBodyOwnerTypeEnum $ownerType;
    
	public function __construct()
	{
		$this->maxEventCount = 0;
		$this->owner = "";
		$this->ownerType = \calendly\calendly\Models\Operations\PostSchedulingLinksRequestBodyOwnerTypeEnum::EVENT_TYPE;
	}
}
