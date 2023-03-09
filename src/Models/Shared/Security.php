<?php

declare(strict_types=1);

namespace calendly\calendly\Models\Shared;

use \calendly\calendly\Utils\SpeakeasyMetadata;

class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=oauth2')]
    public ?SchemeOauth2 $oauth2 = null;
    
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer')]
    public ?SchemePersonalAccessToken $personalAccessToken = null;
    
	public function __construct()
	{
		$this->oauth2 = null;
		$this->personalAccessToken = null;
	}
}
