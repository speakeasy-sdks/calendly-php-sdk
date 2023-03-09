<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class PostInviteeNoShow201ApplicationJSON
{
    #[\JMS\Serializer\Annotation\SerializedName('resource')]
    #[\JMS\Serializer\Annotation\Type('calendly\calendly\Models\Shared\InviteeNoShow')]
    public \calendly\calendly\Models\Shared\InviteeNoShow $resource;
    
	public function __construct()
	{
		$this->resource = new \calendly\calendly\Models\Shared\InviteeNoShow();
	}
}
