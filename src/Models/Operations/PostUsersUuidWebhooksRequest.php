<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostUsersUuidWebhooksRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public PostUsersUuidWebhooksRequestBody $request;
    
	public function __construct()
	{
		$this->request = new \calendly\calendly\Models\Operations\PostUsersUuidWebhooksRequestBody();
	}
}
