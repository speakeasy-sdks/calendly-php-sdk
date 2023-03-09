<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * OutboundCall
 * Meeting publisher will call the Invitee
 */
class OutboundCall
{
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $location;
    
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\OutboundCallTypeEnum>')]
    public OutboundCallTypeEnum $type;
    
	public function __construct()
	{
		$this->location = "";
		$this->type = \calendly\calendly\Models\Shared\OutboundCallTypeEnum::OUTBOUND_CALL;
	}
}
