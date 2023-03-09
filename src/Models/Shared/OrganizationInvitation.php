<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * OrganizationInvitation
 * Organization Invitation object
 */
class OrganizationInvitation
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    #[\JMS\Serializer\Annotation\SerializedName('last_sent_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $lastSentAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organization;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\OrganizationInvitationStatusEnum>')]
    public OrganizationInvitationStatusEnum $status;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->email = "";
		$this->lastSentAt = new \DateTime();
		$this->organization = "";
		$this->status = \calendly\calendly\Models\Shared\OrganizationInvitationStatusEnum::PENDING;
		$this->updatedAt = new \DateTime();
		$this->uri = "";
		$this->user = null;
	}
}
