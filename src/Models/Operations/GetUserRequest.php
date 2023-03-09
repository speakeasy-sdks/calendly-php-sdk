<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserRequest
{
    public GetUserPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetUserPathParams();
	}
}
