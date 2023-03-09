<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetUserAvailabilitySchedulesUuidRequest
{
    public GetUserAvailabilitySchedulesUuidPathParams $pathParams;
    
    public GetUserAvailabilitySchedulesUuidSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetUserAvailabilitySchedulesUuidSecurity();
	}
}
