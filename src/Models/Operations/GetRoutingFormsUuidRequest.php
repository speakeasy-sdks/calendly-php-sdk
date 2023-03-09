<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormsUuidRequest
{
    public GetRoutingFormsUuidPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetRoutingFormsUuidPathParams();
	}
}
