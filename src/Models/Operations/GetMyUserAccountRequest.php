<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetMyUserAccountRequest
{
    public GetMyUserAccountSecurity $security;
    
	public function __construct()
	{
		$this->security = new \calendly\calendly\Models\Operations\GetMyUserAccountSecurity();
	}
}
