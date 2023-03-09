<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * Guest
 * An individual whom an invitee has invited to be a guest attendee to an event
 */
class Guest
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->email = "";
		$this->updatedAt = new \DateTime();
	}
}
