<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostScheduledEventsUuidCancellationMultipartRequest
{
    public PostScheduledEventsUuidCancellationPathParams $pathParams;
    
    /**
     * @var ?array<string, mixed>
     */
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public ?array $request = null;
    
    public PostScheduledEventsUuidCancellationSecurity $security;
    
	public function __construct()
	{
		$this->pathParams = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationPathParams();
		$this->request = null;
		$this->security = new \calendly\calendly\Models\Operations\PostScheduledEventsUuidCancellationSecurity();
	}
}
