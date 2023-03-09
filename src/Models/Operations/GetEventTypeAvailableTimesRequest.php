<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetEventTypeAvailableTimesRequest
{
    public GetEventTypeAvailableTimesQueryParams $queryParams;
    
    public GetEventTypeAvailableTimesSecurity $security;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetEventTypeAvailableTimesQueryParams();
		$this->security = new \calendly\calendly\Models\Operations\GetEventTypeAvailableTimesSecurity();
	}
}
