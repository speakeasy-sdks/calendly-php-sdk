<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Operations;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class PostInviteeNoShowRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public PostInviteeNoShowRequestBody $request;
    
	public function __construct()
	{
		$this->request = new \calendly\calendly\Models\Operations\PostInviteeNoShowRequestBody();
	}
}
