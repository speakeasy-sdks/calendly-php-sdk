<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetEventTypesRequest
{
    public GetEventTypesQueryParams $queryParams;
    
    public GetEventTypesSecurity $security;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetEventTypesQueryParams();
		$this->security = new \calendly\calendly\Models\Operations\GetEventTypesSecurity();
	}
}
