<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * InviteeReconfirmation
 * Assuming reconfirmation is enabled for the event type, when reconfirmation is requested this object is present with a `created_at` that reflects when the reconfirmation notification was sent. Once the invitee has reconfirmed the `confirmed_at` attribute will change from `null` to a timestamp that reflects when they took action.
 */
class InviteeReconfirmation
{
    #[\JMS\Serializer\Annotation\SerializedName('confirmed_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $confirmedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
	public function __construct()
	{
		$this->confirmedAt = new \DateTime();
		$this->createdAt = new \DateTime();
	}
}
