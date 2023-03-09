<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserAvailabilitySchedulesRequest
{
    public GetUserAvailabilitySchedulesQueryParams $queryParams;
    
    public GetUserAvailabilitySchedulesSecurity $security;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesQueryParams();
		$this->security = new \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesSecurity();
	}
}
