<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;



class UserBusyTimeEvent
{
    #[\JMS\Serializer\Annotation\SerializedName('uri')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uri;
    
	public function __construct()
	{
		$this->uri = "";
	}
}
