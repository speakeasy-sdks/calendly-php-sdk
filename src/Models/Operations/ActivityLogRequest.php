<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class ActivityLogRequest
{
    public ActivityLogQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\ActivityLogQueryParams();
	}
}
