<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetInviteesRequest
{
    public GetInviteesPathParams $pathParams;
    
    public GetInviteesQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetInviteesPathParams();
		$this->queryParams = new \calendly\calendly\Models\Operations\GetInviteesQueryParams();
	}
}
