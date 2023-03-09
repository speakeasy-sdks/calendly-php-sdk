<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserRequest
{
    public GetUserPathParams $pathParams;
    
    public GetUserSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetUserPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetUserSecurity();
	}
}
