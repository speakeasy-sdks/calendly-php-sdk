<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormSubmissionsUuidRequest
{
    public GetRoutingFormSubmissionsUuidPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetRoutingFormSubmissionsUuidPathParams();
	}
}
