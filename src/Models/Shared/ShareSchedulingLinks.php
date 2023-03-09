<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class ShareSchedulingLinks
{
    #[\JMS\Serializer\Annotation\SerializedName('booking_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $bookingUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $owner = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('owner_type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\ShareSchedulingLinksOwnerTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ShareSchedulingLinksOwnerTypeEnum $ownerType = null;
    
	public function __construct()
	{
		$this->bookingUrl = "";
		$this->owner = null;
		$this->ownerType = null;
	}
}
