<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostScheduledEventsUuidCancellationRawRequest
{
    public PostScheduledEventsUuidCancellationPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/xml')]
    public ?string $request = null;
    
    public PostScheduledEventsUuidCancellationSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationPathParams();
		$this->request = null;
		$this->security = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationSecurity();
	}
}
