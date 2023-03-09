<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormsRequest
{
    public GetRoutingFormsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \calendly\calendly\Models\Operations\GetRoutingFormsQueryParams();
	}
}
