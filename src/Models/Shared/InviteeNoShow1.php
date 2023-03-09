<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteeNoShow1
 * Provides data pertaining to the associated no show for the Invitee
 */
class InviteeNoShow1
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->uri = "";
	}
}
