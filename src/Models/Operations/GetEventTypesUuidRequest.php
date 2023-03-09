<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;



class GetEventTypesUuidRequest
{
    public GetEventTypesUuidPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\GetEventTypesUuidPathParams();
	}
}
