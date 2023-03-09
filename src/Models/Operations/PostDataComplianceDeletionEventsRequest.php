<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostDataComplianceDeletionEventsRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public PostDataComplianceDeletionEventsRequestBody $request;
    
    public PostDataComplianceDeletionEventsSecurity $security;
    
	public function __construct()
	{
		$this->request = new \calendly\calendly\Models\Operations\PostDataComplianceDeletionEventsRequestBody();
		$this->security = new \calendly\calendly\Models\Operations\PostDataComplianceDeletionEventsSecurity();
	}
}
