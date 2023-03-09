<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class SchemeOauth2
{
    #[SpeakeasyMetadata('security:name=Authorization')]
    public string $authorization;
    
	public function __construct()
	{
		$this->authorization = "";
	}
}
