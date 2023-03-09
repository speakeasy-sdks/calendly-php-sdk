<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormSubmissionsRequest
{
    public GetRoutingFormSubmissionsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetRoutingFormSubmissionsQueryParams();
	}
}
