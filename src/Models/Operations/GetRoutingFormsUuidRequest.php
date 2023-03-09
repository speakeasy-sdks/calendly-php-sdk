<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetRoutingFormsUuidRequest
{
    public GetRoutingFormsUuidPathParams $pathParams;
    
    public GetRoutingFormsUuidSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetRoutingFormsUuidPathParams();
		$this->security = new \calendly\calendly\Models\Operations\GetRoutingFormsUuidSecurity();
	}
}
