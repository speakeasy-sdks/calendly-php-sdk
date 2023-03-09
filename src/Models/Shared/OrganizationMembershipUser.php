<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;


/**
 * OrganizationMembershipUser
 * Information about the user.
 */
class OrganizationMembershipUser
{
    #[\JMS\Serializer\Annotation\SerializedName('avatar_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $avatarUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    #[\JMS\Serializer\Annotation\SerializedName('scheduling_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $schedulingUrl;
    
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;
    
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $timezone;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->avatarUrl = "";
		$this->createdAt = new \DateTime();
		$this->email = "";
		$this->name = "";
		$this->schedulingUrl = "";
		$this->slug = "";
		$this->timezone = "";
		$this->updatedAt = new \DateTime();
		$this->uri = "";
	}
}
