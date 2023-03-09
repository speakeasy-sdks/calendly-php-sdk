<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostSharesRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public PostSharesRequestBody $request;
    
    public PostSharesSecurity $security;
    
	public function __construct()
	{
		$this->request = new \calendly\calendly\Models\Operations\PostSharesRequestBody();
		$this->security = new \calendly\calendly\Models\Operations\PostSharesSecurity();
	}
}
