<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InboundCall
 * Invitee will call meeting publisher at the specified phone number
 */
class InboundCall
{
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $location;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\InboundCallTypeEnum>')]
    public InboundCallTypeEnum $type;
    
	public function __construct()
	{
		$this->location = "";
		$this->type = \calendly\calendly\Models\Shared\InboundCallTypeEnum::INBOUND_CALL;
	}
}
