<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class OrganizationMembership
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organization;
    
    #[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('enum<calendly\calendly\Models\Shared\OrganizationMembershipRoleEnum>')]
    public OrganizationMembershipRoleEnum $role;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\OrganizationMembershipUser')]
    public OrganizationMembershipUser $user;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->organization = "";
		$this->role = \calendly\calendly\Models\Shared\OrganizationMembershipRoleEnum::USER;
		$this->updatedAt = new \DateTime();
		$this->uri = "";
		$this->user = new \calendly\calendly\Models\Shared\OrganizationMembershipUser();
	}
}
