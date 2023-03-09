<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class DeleteInviteeNoShowRequest
{
    public DeleteInviteeNoShowPathParams $pathParams;
    
    public DeleteInviteeNoShowSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\DeleteInviteeNoShowPathParams();
		$this->security = new \calendly\calendly\Models\Operations\DeleteInviteeNoShowSecurity();
	}
}
