<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetScheduledEventsRequest
{
    public GetScheduledEventsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetScheduledEventsQueryParams();
	}
}
