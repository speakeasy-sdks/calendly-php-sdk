<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class EventEventMemberships
{
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $user;
    
	public function __construct()
	{
		$this->user = "";
	}
}
