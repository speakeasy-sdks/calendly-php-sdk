<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostOrganizationsUuidInvitationsRequestBody
{
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
	public function __construct()
	{
		$this->email = "";
	}
}
