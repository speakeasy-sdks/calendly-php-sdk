<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetInviteeNoShowRequest
{
    public GetInviteeNoShowPathParams $pathParams;
    
    public GetInviteeNoShowSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetInviteeNoShowPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetInviteeNoShowSecurity();
	}
}
